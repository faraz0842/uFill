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
use Illuminate\Support\Facades\Crypt;

class RegisterController extends Controller
{
    public function register($is_affiliate = null)
    {

        //$date = Carbon::now();
        //return $date->addYear();


        // $stripe = new \Stripe\StripeClient(
        //     'sk_test_51KmBUpLRABgW92OXYrVXhuF7OaInPaaaZt3xn3DZdnxPhc1V0ET4uCPD8M1wI3Dhods0DdBmBPIXsp9y8OebyAh500vQUnk7hF'
        // );
        // $subscription_retrieve = $stripe->subscriptions->retrieve(
        //     'sub_1LI4qpLRABgW92OXFPNViJ0H',
        //     []
        // );

        //return response()->json($subscription_retrieve);

        //return response()->json(Carbon::parse(1688536991));
        $variants = VariantPlan::join('variants', 'variants.variant_id', 'variants_plan.variant_id')->orderBy('variants.name', 'ASC')
            ->where('variants_plan.plan', 'month')->get();

        //return $variants;
        $variant_plan = VariantPlan::all();
        return view('client.register')->with('variants', $variants)->with('variant_plan', $variant_plan)->with('is_affiliate', $is_affiliate);
    }


    public function registerClient(Request $request)
    {

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:clients,email',
            'company_name' => 'required|unique:clients,company_name',
            'telephone' => 'required|unique:clients,telephone',
            // 'registration_number' => 'unique:clients,registration_number',
            // 'vat_id' => 'unique:clients,vat_id'
        ]);

        try {


            /***********************************
            ||  checking and storing card number
             ************************************/
            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/tokens');
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, "card[number]=" . $request->card_number . "&card[exp_month]=" . $request->card_expiry_month . "&card[exp_year]=" . $request->card_expiry_year . "&card[cvc]=" . $request->card_cvv);
            curl_setopt($ch, CURLOPT_USERPWD, env('STRIPE_SECRET') . ':' . '');

            $headers = array();
            $headers[] = "Authorization: Bearer sk_test_51KmBUpLRABgW92OXYrVXhuF7OaInPaaaZt3xn3DZdnxPhc1V0ET4uCPD8M1wI3Dhods0DdBmBPIXsp9y8OebyAh500vQUnk7hF";

            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

            $result = curl_exec($ch);
            if (curl_errno($ch)) {
                return back()->withError("Something wrong with payment")->withInput();
            }
            curl_close($ch);
            $result = json_decode($result, true);


            //return $result["id"];
            /***********************************
            ||  getting card id
             ************************************/
            $card_id = $result["card"]["id"];







            /***********************************
            ||  storing client data in database
             ************************************/
            $uuid = Str::uuid()->toString();

            $company_logo = $request->file('company_logo');
            if (isset($company_logo)) {
                $image_name = $company_logo->getClientOriginalName();
                $image_name = str_replace(" ", "_", time() . $image_name);
                $image_path = 'upload/Company Logo/';
                $company_logo->move($image_path, $image_name);
                $logo = $image_path . $image_name;
            } else {
                $logo = $request->previous_image;
            }


            $variant_plan = VariantPlan::where('variants_plan.variant_id', $request->account_type)->where('plan', $request->account_plan)->join('variants','variants.variant_id', 'variants_plan.variant_id')->first();


            $client = new Client();
            $client->account_type = $request->account_type;
            $client->account_plan = $request->account_plan;
            $client->invoice_receipt  = null;
            $client->shipping_quantity  = $request->shipping_quantity;
            $client->company_name  = $request->company_name;
            $client->first_name  = $request->first_name;
            $client->last_name  = $request->last_name;
            $client->street  = $request->street;
            $client->house_number  = $request->house_number;
            $client->plz  = $request->plz;
            $client->state  = $request->state;
            $client->country  = $request->country;
            $client->language  = $request->language;
            $client->telephone  = $request->telephone;
            $client->mobile_number  = $request->mobile_number;
            $client->email  = $request->email;
            $client->uu_id = $uuid;
            $client->vat_id  = $request->vat_id;
            $client->registration_number  = $request->registration_number;
            $client->website  = $request->website;
            $client->company_size  = $request->company_size;
            $client->company_description  = $request->company_description;
            $client->hear_about_us  = $request->hear_about_us;
            $client->profile_picture  = $logo;
            $client->package_price = $variant_plan->price;
            if($request->account_plan == 'year'){

                $client->client_until  = Carbon::now()->addYear();
                $client->next_payment = Carbon::now()->addYear();
            }else{

                $client->client_until  = Carbon::now()->addMonth();
                $client->next_payment = Carbon::now()->addMonth();

            }
            if ($client->save()) {


                /******************************************
                ||  storing card details if not in database
                 *******************************************/
                $check_card = ClientCardDetail::where('card_name', $request->card_name)->where('card_number', $request->card_number)->where('expiry_month', $request->card_expiry_month)->with('expiry_year', $request->card_expiry_year)->where('cvv', $request->card_cvv)->first();
                if (!$check_card) {

                    $card = new ClientCardDetail();
                    $card->card_id = $card_id;
                    $card->client_id = $client->id;
                    $card->card_name = $request->card_name;
                    $card->card_number = Crypt::encryptString($request->card_number) ;
                    $card->expiry_month =  $request->card_expiry_month;
                    $card->expiry_year = $request->card_expiry_year;
                    $card->cvv = Crypt::encryptString($request->card_cvv) ;
                    $card->type = 'default';
                    $card->save();
                }


                /******************************************
                ||  creating subscription in stripe
                 *******************************************/
                $package = VariantPlan::where('variant_id', $client->account_type)->where('plan', $client->account_plan)->first();
                $user = Client::where('id', $client->id)->first();
                $input = $request->all();
                $token =  $result["id"];
                $paymentMethod = $request->paymentMethod;

                $options = ([
                    'email' => $request->email,
                    'name' => $request->first_name . ' ' . $request->last_name,
                    'phone' => $request->telephone,
                    //'source' => $result["id"],
                    'address' => [
                        'country' => $request->country,
                        'line1' => $request->street,
                        'line2' => $request->house_number,
                        'postal_code' => $request->plz,
                        'state' => $request->state,
                        'city' => $request->state
                    ],

                ]);
                Stripe\Stripe::setApiKey('sk_test_51KmBUpLRABgW92OXYrVXhuF7OaInPaaaZt3xn3DZdnxPhc1V0ET4uCPD8M1wI3Dhods0DdBmBPIXsp9y8OebyAh500vQUnk7hF');

                if (is_null($user->stripe_id)  ) {

                    if($request->vat_id){

                        $stripeCustomer = $user->createAsStripeCustomer($options);
                        $tax_id = $user->createTaxId('eu_vat', $request->vat_id);
                    }else{

                        $stripeCustomer = $user->createAsStripeCustomer($options);
                    }

                }

                Stripe\Customer::createSource(
                    $user->stripe_id,
                    ['source' => $token]
                );

                $discount = DiscountCode::where('code', $request->discount_code)->where('available_until', '>=', Carbon::now())->first();


                if ($discount) {

                    //return $discount->code;

                    $discount_code = $discount->code;

                    $name = $user->first_name . ' ' . $user->last_name;
                    $stripe_subscription_response = $user->newSubscription($name, $package->price_token)->withCoupon($discount->code)
                        ->create(
                            $paymentMethod,
                            [
                                'email' => $user->email,
                                //'coupon' => $discount_code,
                            ],

                        );

                        DiscountCode::where('id',$discount->id)->update([
                            'code_used' => 1
                        ]);


                    // if($discount->percent != null){
                    //     $discount_amount =  ((float) $package->price/100) * $discount->percent;
                    //     $discount_amount = round($discount_amount);
                    //     //return $discount_amount;
                    //  } elseif ($discount->price != null) {
                    //     $discount_amount =  ((float) $package->price -  $discount->price) ;
                    //  }


                    // $transaction = new Transaction();
                    // $transaction->client_id = $client->id;
                    // $transaction->package_id = $package->plan_id;
                    // $transaction->amount = $package->price;
                    // $transaction->discount_price = $discount_amount;
                    // $transaction->save();


                } else {

                    //return 0 ;

                    $name = $user->first_name . ' ' . $user->last_name;
                    $stripe_subscription_response = $user->newSubscription($name, $package->price_token)
                        ->create(
                            $paymentMethod,
                            [
                                'email' => $user->email,
                            ],

                        );

                    // $transaction = new Transaction();
                    // $transaction->client_id = $client->id;
                    // $transaction->package_id = $package->plan_id;
                    // $transaction->amount = $package->price;
                    // $transaction->discount_price = 0;
                    // $transaction->save();
                }




            }

            /**********************************************************
                ||  storing client id in session
             ***********************************************************/

            $client_info = Client::where('id', $client->id)->first();
            $client_info->referral_link = 'ufill.devatease.com/client/register/' . $client->company_name . '-' . $client->id;
            $client_info->save();

            // session([
            //     'client_id' => $client->id,
            //     'package_name' => $variant_plan->name,
            //     'stripe_id' => $client_info->stripe_id,
            // ]);

            session([
                'client_id' => $client->id,
                'email' => $client->email,
                'name' => $client->first_name . ' ' . $client->last_name,
                'profile_picture' => $client_info->profile_picture,
                'locale' => $request->language,
                'status' => 'online',
                'package_name' => $variant_plan->name,
                'company_name' => $client_info->company_name,
                'stripe_id' => $client_info->stripe_id
            ]);

            // Sending Mail Code
            $name =  $request->first_name . ' ' . $request->last_name;

            $data = array(
                'name' => $name,
            );

            Mail::send('client.email.mail', $data, function ($message) use ($request) {
                $message->to($request->email, 'UFILL ECOM SOLUTION')->subject('Create Password');
                $message->from('ufillsolutions@gmail.com', 'UFILL ECOM SOLUTION');
            });


            $check_client_register = Log::where('client_id', $client->id)->first();
            if (!$check_client_register) {
                $log = new Log();
                $log->client_id = $client->id;
                $log->description = "Client Register";
                $log->save();
            }


            //Inserting If Affilate Link is in registeration

            if ($request->is_affiliate != null) {
                $is_affiliate_exist = Client::where('referral_link', $request->is_affiliate)->first();
                $is_affiate_from_admin = Admin::where('referral_link', $request->is_affiliate)->first();
                if ($is_affiliate_exist) {

                    $affiliate_link = new AffiliateLink();
                    $affiliate_link->affiliate_from = $is_affiliate_exist->id;
                    $affiliate_link->affiliate_to = $client->id;
                    $affiliate_link->save();

                    // $affiliated_client_counts = $is_affiliate_exist->count();
                    // if ($affiliated_client_counts <= 9) {
                    //     # code...
                    // }else if($affiliated_client_counts <= 49){

                    // }else if($affiliated_client_counts <= 99){

                    // } else if ($affiliated_client_counts >= 100 ) {
                    //     # code...
                    // }

                }
                if ($is_affiate_from_admin) {

                    $affiliate_link = new AffiliateLink();
                    $affiliate_link->affiliate_from_admin = $is_affiate_from_admin->admin_id;
                    $affiliate_link->affiliate_to = $client->id;
                    $affiliate_link->save();
                }
            }


            if ($variant_plan->name == 'shipment') {
                return redirect()->Route('client.shipment.delivery');
            } else {
                return redirect()->Route('client.dashboard');
            }
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
        $check_discount = DiscountCode::where('code', $request->value)->where('available_until','>=', Carbon::now())->first();
        return $check_discount;
    }
}
