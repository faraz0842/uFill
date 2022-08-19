<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\AdminCompany;
use App\Models\AdminSchedule;
use App\Models\AdminTask;
use App\Models\Client;
use Carbon\Carbon;
use Exception;
use App\Models\AffiliateLink;
use App\Models\ApiIntegration;
use App\Models\Transaction;
use App\Models\ShippingDetail;
use App\Models\Variant;
use App\Models\ClientCardDetail;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;



class ProfileController extends Controller
{
    public function profileView($id)
    {

        $total_revenue = Transaction::select(DB::raw('sum(amount - discount_price) as total'))->where('client_id',session('client_id'))->first();

        //return response()->json($total_revenue);
        $referred_clients_count = AffiliateLink::where('affiliate_from',session('client_id'))->count();

        $total_clients = Client::count();

        $admin_user = Admin::count();

        $profile = Client::where('id',$id)->first();

        $setting = Admin::all();
        $client_info = Client::where('id',session('client_id'))->join('variants','variants.variant_id','clients.account_type')->first();
        return view('client.settings.security')->with('setting',$setting)->with('client_info',$client_info)->with('profile',$profile)
                                              ->with('total_revenue',$total_revenue)->with('referred_clients_count',$referred_clients_count)
                                              ->with('total_clients',$total_clients)->with('admin_user',$admin_user);


    }

     /*********************************
     * ===== Client Update Password
     *********************************/

     public function updatePassword(Request $request , $id)
     {
         //return $request->current_password;
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required|same:new_password'
        ]);

        try {

           $is_exists =  Client::where('id',$id)->first();

           if ($is_exists) {

                if (Hash::check($request->current_password, $is_exists->password)) {
                        $is_exists->update([
                            'password' => bcrypt($request->input('new_password'))
                        ]);
                        return  redirect()->back()->with('message','Your Password Has successfully been updated..');
                } else {
                     return back()->withError('Current Password Does not match')->withInput();
                }
            }

            return redirect()->Route('client.profile',$id);
        } catch (QueryException $ex) {
            return back()->withError($ex->getMessage())->withInput();
        }catch (Exception $ex) {
            return back()->withError($ex->getMessage())->withInput();
        }
    }

     public function updateEmail(Request $request , $id)
     {

        $email = Client::where('id',$id)->first();

        $previous_email = $email->email;
        $data = array(
            'name' => $email->first_name . ' ' . $email->last_name,
            'email' => $request->email,
        );

        Mail::send('admin.mail.email_change', $data , function($message) use($request , $previous_email){
            $message->subject('Email Confirmation');
            $message->to($previous_email, 'UFILL ECOM SOLUTION');
            $message->from('ufillsolutions@gmail.com','UFILL ECOM SOLUTION');
        });

        $data = array(
            'name' => $email->first_name . ' ' . $email->last_name,
        );

        Mail::send('admin.mail.email_confirm', $data , function($message) use($request , $email){
            $message->subject('Email Confirmation');
            $message->to($request->email, 'UFILL ECOM SOLUTION');
            $message->from('ufillsolutions@gmail.com','UFILL ECOM SOLUTION');
        });

        $email->email = $request->email;
        $email->save();
        return back();


     }




    public function forgetPassword($email)
    {
        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $email,
            'token' => $token,
            'created_at' => Carbon::now()
            ]);

        Mail::send('admin.mail.forgetpassword', ['token' => $token], function($message) use($email){
            $message->to($email);
            $message->subject('Forget Password');
        });

        return back();
    }

    public function setUp2FA(Request $request)
    {
       Client::where('email',$request->email)->update([
           'istofactor' => 1
       ]);

       return back()->withSuccess('Two factor authentication has been activated on your account');
    }

    public function deActivateUp2FA(Request $request , $email)
    {
       Client::where('email',$email)->update([
           'istofactor' => 0
       ]);

       return back()->withSuccess('Two factor authentication has been Deactivated on your account');
    }



    /**
     * Display the client billing resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showBilling($id , $stripe_id)
    {
        $variants = Variant::all();
        $stripe = new \Stripe\StripeClient(
            'sk_test_51KmBUpLRABgW92OXYrVXhuF7OaInPaaaZt3xn3DZdnxPhc1V0ET4uCPD8M1wI3Dhods0DdBmBPIXsp9y8OebyAh500vQUnk7hF'
        );

        $invoices =  $stripe->invoices->all(['customer' => $stripe_id]);

        $affiliated_at = AffiliateLink::where('affiliate_from',$id)->join('clients','clients.id','affiliate_link.affiliate_from')->get();

        //return response()->json($invoices);
        //$shipping_details = ShippingDetail::all();
        $today_shipments = ShippingDetail::whereDate('created_at', Carbon::today())->get();
        $this_week_shipments = ShippingDetail::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
        $last_week_shipments = ShippingDetail::whereBetween('created_at', [Carbon::now()->subWeek()->startOfWeek(), Carbon::now()->subWeek()->endOfWeek()])->get();
        $this_month_shipments = ShippingDetail::whereMonth('created_at', Carbon::now()->month)->get();
        $last_month_shipments = ShippingDetail::whereBetween('created_at', [Carbon::now()->subMonth()->startOfMonth(), Carbon::now()->subMonth()->endOfMonth()])->get();
        $this_year_shipments = ShippingDetail::whereYear('created_at', date('Y'))->get();
        $last_year_shipments = ShippingDetail::whereMonth('created_at', Carbon::now()->month)->get();

        $card_details = ClientCardDetail::where('client_id',$id)->get();

        $variant_name = Variant::where('name','team')->first();
        $client_users = Client::where('account_type',$variant_name->variant_id)->count();
        $date = Carbon::now();
        $current_date = $date->toDateTimeString();

        //return response()->json($client_users);

        $client = Client::where('clients.id',$id)->leftJoin('subscriptions','subscriptions.client_id','clients.id')
                            ->join('variants','variants.variant_id','clients.account_type')
                            ->select('clients.*','subscriptions.id as subscription_id','subscriptions.client_id','subscriptions.name as subscription_name','subscriptions.stripe_status',
                            'variants.variant_id','variants.name as variant_name')->first();

        $referred_clients = AffiliateLink::where('affiliate_from',$client->id)->count();

        //return response()->json($client);
        return view('client.billing')->with('client',$client)->with('today_shipments',$today_shipments)->with('affiliated_at',$affiliated_at)->with('client_users',$client_users)
                                        ->with('variants',$variants)->with('invoices',$invoices->data)->with('card_details',$card_details)->with('referred_clients',$referred_clients)
                                        ->with('this_week_shipments',$this_week_shipments)->with('last_week_shipments',$last_week_shipments)->with('this_month_shipments',$this_month_shipments)
                                        ->with('last_month_shipments',$last_month_shipments)->with('this_year_shipments',$this_year_shipments)->with('last_year_shipments',$last_year_shipments)
                                        ->with('current_date',$current_date);
    }

    public function invoiceView($invoice_id)
    {
        $stripe = new \Stripe\StripeClient(
            'sk_test_51KmBUpLRABgW92OXYrVXhuF7OaInPaaaZt3xn3DZdnxPhc1V0ET4uCPD8M1wI3Dhods0DdBmBPIXsp9y8OebyAh500vQUnk7hF'
        );

        $invoice = $stripe->invoices->retrieve(
            $invoice_id,
            []
        );

        $created_date = Carbon::parse($invoice->created);
        $period_end = Carbon::parse($invoice->period_end);

        $company_detail = AdminCompany::where('company_id', 1)->first();
        $client = Client::where('stripe_id', $invoice->customer)->first();

        //return response()->json($invoice->discount->coupon->percent_off);

        return view('client.invoice')->with('invoice', $invoice)->with('created_date', $created_date)->with('client', $client)
            ->with('period_end', $period_end)->with('company_detail', $company_detail);
    }



}
