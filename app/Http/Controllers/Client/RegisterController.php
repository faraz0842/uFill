<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\AffiliateLink;
use App\Models\Client;
use App\Models\ClientCardDetail;
use App\Models\CostOverview;
use App\Models\DiscountCode;
use App\Models\Log;
use App\Models\Transaction;
use App\Models\Variant;
use App\Models\VariantPlan;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Stripe;
use App\Helpers\Helper;

class RegisterController extends Controller
{
    public function register($is_affiliate = null)
    {

        $stripe = new \Stripe\StripeClient(
            'sk_test_51KmBUpLRABgW92OXYrVXhuF7OaInPaaaZt3xn3DZdnxPhc1V0ET4uCPD8M1wI3Dhods0DdBmBPIXsp9y8OebyAh500vQUnk7hF'
        );
        $subscription_retrieve = $stripe->subscriptions->retrieve(
            'sub_1LI4qpLRABgW92OXFPNViJ0H',
            []
        );

        //return response()->json($subscription_retrieve);

        //return response()->json(Carbon::parse(1688536991));
        $variants = VariantPlan::join('variants','variants.variant_id','variants_plan.variant_id')->orderBy('variants.name' , 'ASC')
                               ->where('variants_plan.plan','month')->get();

        //return $variants;
        $variant_plan = VariantPlan::all();
        return view('client.register')->with('variants',$variants)->with('variant_plan',$variant_plan)->with('is_affiliate',$is_affiliate);

    }


    public function registerClient(Request $request)
    {
        //return $request->is_affiliate;
        //return Carbon::parse(1487663764);

        $request->validate([
            'first_name' => 'required|unique:clients,first_name',
            'last_name' => 'required|unique:clients,last_name',
            'email' => 'required|unique:clients,email',
            'company_name' => 'required|unique:clients,company_name',
            'telephone' => 'required|unique:clients,telephone',
            'mobile_number' => 'required|unique:clients,mobile_number',
        ]);

       try {
        //Stripe Subscription Code
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "card[number]=".$request->card_number."&card[exp_month]=".$request->card_expiry_month."&card[exp_year]=".$request->card_expiry_year."&card[cvc]=".$request->card_cvv);
        curl_setopt($ch, CURLOPT_USERPWD, env('STRIPE_SECRET') . ':' . '');

        $headers = array();
        $headers[] = "Authorization: Bearer sk_test_51KmBUpLRABgW92OXYrVXhuF7OaInPaaaZt3xn3DZdnxPhc1V0ET4uCPD8M1wI3Dhods0DdBmBPIXsp9y8OebyAh500vQUnk7hF" ;

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        $result = curl_exec($ch);
        if (curl_errno($ch)) {
            return back()->withError("Something wrong with payment")->withInput();
        }
        curl_close($ch);
        $result = json_decode($result,true);
        //return $result["card"]["id"];

        $card_id = $result["card"]["id"];

        //return $card_id;
        //create table affiliate
        //id
        //affiliate_from
        //affiliate_to
        //created_at
        //updated_at




        //Creating Customer Code
        $uuid = Str::uuid()->toString();

        $company_logo = $request->file('company_logo');
            if (isset($company_logo)) {
                $image_name = $company_logo->getClientOriginalName();
                $image_name = str_replace(" ", "_", time() . $image_name);
                $image_path = 'upload/Company Logo/';
                $company_logo->move($image_path, $image_name);
                $logo = $image_path.$image_name;
            } else {
                $logo = $request->previous_image;
            }


            $variant_plan = VariantPlan::where('variant_id', $request->account_type)->where('plan', $request->account_plan)->first();


        $client = new Client();
        $client->account_type = $request->account_type;
        $client->account_plan = $request->account_plan;
        $client->invoice_receipt  = null;
        $client->shipping_quantity  = $request->shipping_quantity;
        $client->company_name  = $request->company_name ;
        $client->first_name  = $request->first_name ;
        $client->last_name  = $request->last_name ;
        $client->street  = $request->street ;
        $client->house_number  = $request->house_number ;
        $client->plz  = $request->plz ;
        $client->state  = $request->state ;
        $client->country  = $request->country ;
        $client->telephone  = $request->telephone ;
        $client->mobile_number  = $request->mobile_number ;
        $client->email  = $request->email ;
        $client->uu_id = $uuid;
        $client->vat_id  = $request->vat_id ;
        $client->registration_number  = $request->registration_number ;
        $client->website  = $request->website ;
        $client->company_size  = $request->company_size ;
        $client->company_description  = $request->company_description ;
        $client->hear_about_us  = $request->hear_about_us ;
        $client->profile_picture  = $logo ;
        $client->package_price = $variant_plan->price;
        if($client->save()){




             Client::where('id',$client->id)->update([
                'referral_link' => 'ufill.devatease.com/client/register/'.$client->company_name. '-' .$client->id,
            ]);


            $check_card = ClientCardDetail::where('card_name',$request->card_name)->where('card_number',$request->card_number)->where('expiry_month',$request->card_expiry_month)->with('expiry_year',$request->card_expiry_year)->where('cvv',$request->card_cvv)->first();
            if (!$check_card) {

                $card = new ClientCardDetail();
                $card->card_id = $card_id;
                $card->client_id =$client->id;
                $card->card_name =$request->card_name;
                $card->card_number = $request->card_number;
                $card->expiry_month = $request->card_expiry_month;
                $card->expiry_year = $request->card_expiry_year;
                $card->cvv = $request->card_cvv;
                $card->type = 'default';
                $card->save();
            }



            session([
                    'client_id'=>$client->id,
                ]);

                $user = Client::where('id', $client->id)->first();
                $input = $request->all();
                $token =  $result["id"];
                $paymentMethod = $request->paymentMethod;

                $package = VariantPlan::where('variant_id', $client->account_type)->where('plan',$client->account_plan)->first();

                Stripe\Stripe::setApiKey('sk_test_51KmBUpLRABgW92OXYrVXhuF7OaInPaaaZt3xn3DZdnxPhc1V0ET4uCPD8M1wI3Dhods0DdBmBPIXsp9y8OebyAh500vQUnk7hF');

                if (is_null($user->stripe_id)) {
                    $stripeCustomer = $user->createAsStripeCustomer();
                }

                Stripe\Customer::createSource(
                    $user->stripe_id,
                    ['source' => $token]
                );

                // $discount_price = 0;
                // if ($request->is_affiliate != null) {

                //     $discount = DiscountCode::where('name',$request->discount_code)->first();
                //     $discount_code = $discount->code;

                // } else {
                //     $discount_code = null;
                // }

                // if($discount_code){
                //     $discount_amount =  ((float) $package->price/100) * $discount->percent;
                //     //return $discount_amount;
                //  }else{
                //      $discount_amount =  0;
                //  }

                // $stripe = new \Stripe\StripeClient(
                // 'sk_test_51KmBUpLRABgW92OXYrVXhuF7OaInPaaaZt3xn3DZdnxPhc1V0ET4uCPD8M1wI3Dhods0DdBmBPIXsp9y8OebyAh500vQUnk7hF'
                // );

                // $stripe_subscription_response =   $stripe->subscriptions->create([
                // 'customer' => $user->stripe_id,

                // 'items' => [
                //     ['price' => $package->price_token],
                // ],
                //     'coupon' => $discount_code,
                // ]);

                //return response()->json($stripe_subscription_response);



                $name = $user->first_name . ' ' . $user->last_name;
                $stripe_subscription_response = $user->newSubscription($name,$package->price_token)
                    ->create($paymentMethod,
                    [
                        'email' => $user->email,
                        //'coupon' => $discount_code,
                    ],

                );

                Client::where('id',$client->id)->update([
                    'client_until' => Carbon::parse($stripe_subscription_response->current_period_end),
                    'next_payment' => Carbon::parse($stripe_subscription_response->current_period_end),
                ]);

                //  if($discount){
                //     $discount_amount =  ((float) $package->price/100) * $discount->percent;
                //  }


                 $transaction = new Transaction();
                 $transaction->client_id = $client->id;
                 $transaction->package_id = $package->plan_id;
                 $transaction->amount = $package->price;
                 $transaction->discount_price = 0;
                 $transaction->save();
        }

        // Sending Mail Code
        $name =  $request->first_name . ' ' . $request->last_name;

        $data = array(
                    'name' => $name,
        );

        Mail::send('client.email.mail', $data , function($message) use($request){
              $message->to($request->email, 'UFILL ECOM SOLUTION')->subject('Create Password');
              $message->from('ufillsolutions@gmail.com','UFILL ECOM SOLUTION');
          });


        $check_client_register = Log::where('client_id',$client->id)->first();
        if(!$check_client_register){
            $log = new Log();
            $log->client_id = $client-> id;
            $log->description = "Client Register";
            $log->save();
        }


        // $unpaid_invoices = 0;
        // $paid_invoices = 0;
        // foreach(){
        //     if(paid){
        //         $paid_invoices += amount;
        //     }else{
        //         $unpaid_invoices += amount;
        //     }
        // }


        if($request->is_affiliate != null){
            $is_affiliate_exist = Client::where('referral_link', $request->is_affiliate)->first();
            $is_affiate_from_admin = Admin::where('referral_link',$request->is_affiliate)->first();
            if($is_affiliate_exist){

                $affiliate_link = new AffiliateLink();
                $affiliate_link->affiliate_from = $is_affiliate_exist->id;
                $affiliate_link->affiliate_to = $client->id;
                $affiliate_link->save();

            }
            if($is_affiate_from_admin){

                $affiliate_link = new AffiliateLink();
                $affiliate_link->affiliate_from_admin = $is_affiate_from_admin->admin_id;
                $affiliate_link->affiliate_to = $client->id;
                $affiliate_link->save();

            }
        }

        return redirect()->Route('client.dashboard');


       } catch (\Exception $th) {
           return back()->withError($th->getMessage())->withInput();
       }
    }


    /**
       * Write code on Method
       *
       * @return response()
       */
    public function createPasswordForm()
    {

        return view('client.email.create_password');

    }

    public function storePassword(Request $request)
    {
          $request->validate([
              'email' => 'required|email|exists:clients',
              'password' => 'required|string|min:6|',
              'confirm_password' => 'required|same:password'
          ]);


          $client = Client::where('email', $request->email)
                      ->update(['password' => Hash::make($request->password)]);


          return redirect('/client/login')->with('message', 'Your password has been set succesfully!');
    }


    public function checkDiscountCode(Request $request)
    {
        $check_discount = DiscountCode::where('code',$request->value)->first();

        // $variant_id = $request->variant_id;
        // $info = VariantPlan::where('variant_id', $variant_id)->get();
        // $data = array();
        // foreach ($info as $value) {
        //     $data[] = [
        //         "plan" => $value->plan,
        //         "price" => Helper::money_format('EUR','de_DE',$value->price)
        //     ];
        // }

        // $product_info = array();

        // $product_info['check_discount'] = $check_discount;
        // $product_info['product_data'] = $data;


        return $check_discount;

    }
}
