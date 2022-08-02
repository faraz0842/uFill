<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\AffiliateLink;
use App\Models\AffiliateProgram;
use App\Models\Client;
use App\Models\CostOverview;
use App\Models\DiscountCode;
use App\Models\Log;
use App\Models\ShipmentpackageFee;
use App\Models\ShippingDetail;
use App\Models\Transaction;
use App\Models\Variant;
use App\Models\VariantPlan;
use DateTime;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Money\Currencies\ISOCurrencies;
use Money\Currency;
use Money\Formatter\IntlMoneyFormatter;
use Money\Money;
use NumberFormatter;

class DashboardController extends Controller
{
    /*********************
     * ++++++ Dashboard
     **********************/

    public function dashboard()
    {
        // $time = Carbon::now()->subHours(1)->toDateTimeString();
        // $admin_users = Log::whereNotNull('admin_id')->where('created_at' ,'<=' , Carbon::now()->subHours(1)->toDateTimeString())->groupBy('admin_id')->pluck('admin_id');

        // $update_status = Admin::whereIn('admin_id',$admin_users)->update([
        //     'status' => 'offline',
        // ]);

        // return response()->json($time);

        $firstDay = Carbon::now('PKT')->startOfMonth();

        //return $firstDay;

        $affiliate_program = AffiliateLink::groupBy('affiliate_from')->select('id', DB::raw('count(*) as total'))->where('affiliate_from', '!=' , null)->get();

        //return response()->json($affiliate_program);
        // $three_percent = 0;
        // $five_percent = 0;
        // $fifteen_percent = 0;

        // foreach($affiliate_program as $affiliate_program_data){
        //     if($affiliate_program_data->total >=1 && $affiliate_program_data->total < 10){
        //         $three_percent++;
        //     }elseif($affiliate_program_data->total >=10 && $affiliate_program_data->total < 50){
        //         $five_percent++;
        //     }elseif($affiliate_program_data->total >=50){
        //         $fifteen_percent++;
        //     }
        // }

        $affiliated_clients_images = AffiliateLink::join('clients','clients.id','affiliate_link.affiliate_to')->distinct()->take(5)->get();

        //return response()->json($affiliated_clients_images);

        $clients = Client::leftJoin('subscriptions','subscriptions.client_id','clients.id')
                           ->join('variants','variants.variant_id','clients.account_type')
                           ->select('clients.*','subscriptions.id as subscription_id','subscriptions.client_id','subscriptions.name as subscription_name','subscriptions.stripe_status',
                            'variants.variant_id','variants.name as variant_name','variants.variant_id','variants.name as variant_name')->get();


        $total_amount = Transaction::sum('amount');
        $total_discount = Transaction::sum('discount_price');

        $total_revenue = $total_amount - $total_discount;

        //return $clients;

        // +++++++++++   Dashboard Calculations ++++++++++++++
        $last_30_days = Carbon::now()->subDays(30);
        $last_30_days_clients = Client::where('created_at', '>=', $last_30_days)->get();

        $client_pictures = $last_30_days_clients->take(5);
        //return $client_pictures;

       $last_30_days_revenue = Transaction::select(DB::raw('sum(amount - discount_price) as total'))->where('created_at', '>=' , $last_30_days)->first();
       $last_year_revenue = Transaction::select(DB::raw('sum(amount - discount_price) as total'))
                        ->whereYear('created_at', Carbon::now()->format('Y'))
                        ->first();


        $total_last_30_days_revenue = $last_30_days_revenue->total == null ? 0 : $last_30_days_revenue->total;
        $total_last_year_revenue = $last_year_revenue->total == null ? 0 : $last_year_revenue->total;

        if ($total_last_30_days_revenue && $total_last_year_revenue) {
            $total_revenue_per = ($total_last_30_days_revenue / $total_last_year_revenue) * 100;
        } else {
            $total_revenue_per = 0;
        }


        //+++++++++++++ Invoices +++++++++++++

        $stripe = new \Stripe\StripeClient(
            'sk_test_51KmBUpLRABgW92OXYrVXhuF7OaInPaaaZt3xn3DZdnxPhc1V0ET4uCPD8M1wI3Dhods0DdBmBPIXsp9y8OebyAh500vQUnk7hF'
        );

        $invoices =  $stripe->invoices->all();



        // UNPAID INVOICES BOX
        $firstDay = strtotime(Carbon::now()->startOfMonth());
        $lastDay = strtotime(Carbon::now()->endOfMonth());

        $prepare_query = "created>".$firstDay." AND created<".$lastDay;
        $search_invoice = $stripe->invoices->search([
            'query' => $prepare_query,
        ]);


        $amount_paid = 1;
        $total_amount = 1;
        $open_invoice_amount = 0;
        foreach ($search_invoice->data as $key => $value) {
            if($value->status == 'unpaid'){
                $open_invoice_amount += $value->amount_remaining;
            }elseif($value->status == 'paid') {
                $amount_paid += $value->amount_paid;
            }


            $total_amount += $value->total;
        }

        // $amount_paid_sum = array_sum($amount_paid);
        // $total_amount_sum = array_sum($total_amount);

        //return response()->json($amount_paid);
        $unpaid_invoices = 0;
        $paid_invoices = 0;
        $unpaid_invoices_count = 0;
        $paid_invoices_count = 0;

        if ($invoices) {
            foreach($invoices->data as $data){
                if($data->paid){
                    $paid_invoices += $data->amount_paid;
                    $paid_invoices_count++;
                }else{
                    $unpaid_invoices +=  $data->amount_remaining;
                    $unpaid_invoices_count++;
                }
            }
        }

        // / return response()->json($invoices->data[0]['paid']);
        // return $paid_invoices_count;

        $current_month_count = Client::whereMonth('created_at', date('m'))->count();

        //return $current_month_count;

        if($clients && $current_month_count ){
            //$check_client_progress = ( $current_month_count / $clients->count())  * 100 ;
            $check_client_progress = ( $current_month_count / 1)  * 100 ;
        }else{
            $check_client_progress = 0 ;
        }


        //return response()->json($check_client_progress);
        $shipping_details = ShippingDetail::all();

        $costs_overview = Variant::join('variants_plan','variants_plan.variant_id','variants.variant_id')->get();

        //return response()->json($costs_overview);

        $shipping_packages = ShipmentpackageFee::all();

        $affiliated_programs = AffiliateProgram::all();

        $discount_codes = DiscountCode::orderby('id','DESC')->get();
        $logs = Log::join('clients','clients.id','logs.client_id')->get();


        $client_countries = CLient::groupBy('country')->selectraw("country")->get();
        $countries = array();
        foreach ($client_countries as $value) {
           $countries[] = $value["country"];
        }

        $every_month_revenue = DB::select('select year(created_at) as year, month(created_at) as month, sum(amount) as total_amount from transactions group by year(created_at), month(created_at)');
        $months = array();
        $amount = array();
        $year = array();

        foreach ($every_month_revenue as $user){

            $monthNum = $user->month;
            $dateObj = DateTime::createFromFormat('!m', $monthNum);
            $months[] = $dateObj->format('F');

            $amount[] = $user->total_amount;
            $year[] = $user->year;


        }

        $active_clients_graphs = DB::select('select year(created_at) as year, month(created_at) as month, count(id) as total_clients from clients group by year(created_at), month(created_at)');

        $client_month = array();
        $total_clients = array();
        $client_year = array();

        foreach ($active_clients_graphs as $active_clients_graph){

            $monthNum = $active_clients_graph->month;
            $dateObj = DateTime::createFromFormat('!m', $monthNum);
            $client_month[] = $dateObj->format('F');

            $total_clients[] = $active_clients_graph->total_clients;
            $client_year[] = $active_clients_graph->year;


        }
        //return $total_clients;

        //return response()->json($countries);

        return view('admin.dashboard')->with('clients',$clients)->with('costs_overview',$costs_overview)
                                      ->with('discount_codes',$discount_codes)->with('logs',$logs)
                                      ->with('shipping_details',$shipping_details)->with('check_client_progress',$check_client_progress)
                                      ->with('last_30_days_clients',$last_30_days_clients)->with('unpaid_invoices',$unpaid_invoices)
                                      ->with('unpaid_invoices_count',$unpaid_invoices_count)->with('invoices',$invoices)
                                      ->with('paid_invoices',$paid_invoices)->with('paid_invoices_count',$paid_invoices_count)
                                      ->with('total_revenue',$total_revenue)->with('client_pictures',$client_pictures)
                                      ->with('total_revenue_per',$total_revenue_per)
                                      ->with('affiliated_clients_images',$affiliated_clients_images)
                                      ->with('affiliated_programs',$affiliated_programs)
                                      ->with('affiliate_program',$affiliate_program)
                                      ->with('shipping_packages',$shipping_packages)
                                      ->with('amount_paid',$amount_paid)
                                      ->with('total_amount',$total_amount)
                                      ->with('open_invoice_amount',$open_invoice_amount)
                                      ->with('countries',$countries)->with('months',$months)->with('amount',$amount)
                                      ->with('year',$year)->with('client_month',$client_month)->with('total_clients',$total_clients)
                                      ->with('client_year',$client_year);
    }

    /*******************
     * ++ storeCostOverview
     **********************/

    public function storeCostOverview(Request $request)
    {


        try {

            $stripe = new \Stripe\StripeClient(
                'sk_test_51KmBUpLRABgW92OXYrVXhuF7OaInPaaaZt3xn3DZdnxPhc1V0ET4uCPD8M1wI3Dhods0DdBmBPIXsp9y8OebyAh500vQUnk7hF'
                );
            $products = $stripe->products->all();



            foreach ($products->data as $key => $prod) {

                $is_product_exists = Variant::where('variant_id',$prod->id)->where('name',$prod->name)->where('description',$prod->description)->first();

                //return response()->json($prod->description);

                if(!$is_product_exists){

                    $variant = new Variant();
                    $variant->variant_id = $prod->id;
                    $variant->name = $prod->name;
                    $variant->description = $prod->description;
                    $variant->save();

                }else{

                    $variant = Variant::where('variant_id',$prod->id)->first();
                    $variant->name = $prod->name;
                    $variant->description = $prod->description;
                    $variant->save();
                }

            }

            //return 1;

            $stripe = new \Stripe\StripeClient(
                'sk_test_51KmBUpLRABgW92OXYrVXhuF7OaInPaaaZt3xn3DZdnxPhc1V0ET4uCPD8M1wI3Dhods0DdBmBPIXsp9y8OebyAh500vQUnk7hF'
            );

            $product_price = $stripe->prices->all();



            //return response()->json($product_price->data[0]);

            foreach ($product_price->data as $key => $prod_price) {

                // $money = new Money($prod_price->unit_amount, new Currency('EUR'));
                // $currencies = new ISOCurrencies();

                // $numberFormatter = new \NumberFormatter('it_IT', NumberFormatter::DECIMAL);
                // $moneyFormatter = new IntlMoneyFormatter($numberFormatter, $currencies);

                // $formatted_price = $moneyFormatter->format($money);


                $is_price_exists = VariantPlan::where('variant_id',$prod_price->product)->where('plan',$prod_price->recurring->interval)->first();

                if(!$is_price_exists){

                    //return 1;
                    $varian = new VariantPlan();
                    $varian->variant_id = $prod_price->product;
                    $varian->plan = $prod_price->recurring->interval;
                    $varian->price_token = $prod_price->id;
                    $varian->price = $prod_price->unit_amount;
                    $varian->save();

                }else{

                    $is_price_exists->plan = $prod_price->recurring->interval;
                    $is_price_exists->price_token = $prod_price->id;
                    $is_price_exists->price = $prod_price->unit_amount;
                    $is_price_exists->save();


                }

            }

             return redirect()->Route('admin.dashboard')->with('message',' Data uploaded successfully');


           // return response()->json($products->data[0]);



        //     $check_product = Variant::where('name',$request->variant)->first();

        //     if(!$check_product){

        //         $stripe = new \Stripe\StripeClient(
        //         'sk_test_51KmBUpLRABgW92OXYrVXhuF7OaInPaaaZt3xn3DZdnxPhc1V0ET4uCPD8M1wI3Dhods0DdBmBPIXsp9y8OebyAh500vQUnk7hF'
        //     );


        //     $product = $stripe->products->create([
        //         'name' => $request->variant,
        //         'description' => $request->description,
        //     ]);

        //    // return response()->json($product);



        //     $stripe = new \Stripe\StripeClient(
        //         'sk_test_51KmBUpLRABgW92OXYrVXhuF7OaInPaaaZt3xn3DZdnxPhc1V0ET4uCPD8M1wI3Dhods0DdBmBPIXsp9y8OebyAh500vQUnk7hF'
        //     );

        //     $price = $stripe->prices->create([
        //         'unit_amount' => $request->price ,
        //         'currency' => 'eur',
        //         'recurring' => ['interval' => $request->runtime],
        //         'product' => $product->id,
        //     ]);




        //     }else{

        //         $product = Variant::where('name',$request->variant)->first();

        //         //return $product;

        //         $stripe = new \Stripe\StripeClient(
        //             'sk_test_51KmBUpLRABgW92OXYrVXhuF7OaInPaaaZt3xn3DZdnxPhc1V0ET4uCPD8M1wI3Dhods0DdBmBPIXsp9y8OebyAh500vQUnk7hF'
        //         );

        //         $price = $stripe->prices->create([
        //             'unit_amount' => $request->price ,
        //             'currency' => 'eur',
        //             'recurring' => ['interval' => $request->runtime],
        //             'product' => $product->variant_id,
        //         ]);


        //         $cost_overview = new VariantPlan();
        //         $cost_overview->variant_id = $product->variant_id;
        //         $cost_overview->plan = $request->runtime;
        //         $cost_overview->price_token = $price->id;
        //         $cost_overview->price = $request->price;
        //         $cost_overview->save();

        //     }




        } catch (Exception $th) {
            return back()->withError($th->getMessage())->withInput();
        }
    }

    /*******************
     * ++ storeCostOverview
     **********************/

    public function updateCostOverview(Request $request , $product_id , $price_id = null)
    {
        // $request->validate([
        //     'variant' => 'required',
        //     'description' => 'required',
        //     'runtime' => 'required',
        //     'price' => 'required',
        // ]);

         try {

            $stripe = new \Stripe\StripeClient(
                'sk_test_51KmBUpLRABgW92OXYrVXhuF7OaInPaaaZt3xn3DZdnxPhc1V0ET4uCPD8M1wI3Dhods0DdBmBPIXsp9y8OebyAh500vQUnk7hF'
            );
            $product = $stripe->products->retrieve(
                $product_id,
                []
            );

            //return response()->json($product->name);
            $variant = Variant::where('variant_id',$product_id)->first();
            $variant->variant_id = $product->id;
            $variant->name = $product->name;
            $variant->description = $product->description;
            if($variant->save()){

                $stripe = new \Stripe\StripeClient(
                    'sk_test_51KmBUpLRABgW92OXYrVXhuF7OaInPaaaZt3xn3DZdnxPhc1V0ET4uCPD8M1wI3Dhods0DdBmBPIXsp9y8OebyAh500vQUnk7hF'
                );
                $product_price = $stripe->prices->retrieve(
                    $price_id,
                    []
                );

                    $varian = new VariantPlan();
                    $varian->variant_id = $product_price->product;
                    $varian->plan = $product_price->recurring->interval;
                    $varian->price_token = $product_price->id;
                    $varian->price = $product_price->unit_amount;
                    $varian->save();

            }

            return redirect()->Route('admin.dashboard')->with('message','data updated successfully');




        //     $check_product = Variant::where('name',$request->name)->first();

        //     if(!$check_product){

        //         $stripe = new \Stripe\StripeClient(
        //         'sk_test_51KmBUpLRABgW92OXYrVXhuF7OaInPaaaZt3xn3DZdnxPhc1V0ET4uCPD8M1wI3Dhods0DdBmBPIXsp9y8OebyAh500vQUnk7hF'
        //     );


        //     $product = $stripe->products->create([

        //     ]);
        //     $stripe = new \Stripe\StripeClient(
        //         'sk_test_51KmBUpLRABgW92OXYrVXhuF7OaInPaaaZt3xn3DZdnxPhc1V0ET4uCPD8M1wI3Dhods0DdBmBPIXsp9y8OebyAh500vQUnk7hF'
        //     );
        //     $stripe->products->update(
        //         $id,
        //         [
        //             'name' => $request->variant,
        //             'description' => $request->description,
        //         ]
        //     );

        //    // return response()->json($product);



        //     $stripe = new \Stripe\StripeClient(
        //         'sk_test_51KmBUpLRABgW92OXYrVXhuF7OaInPaaaZt3xn3DZdnxPhc1V0ET4uCPD8M1wI3Dhods0DdBmBPIXsp9y8OebyAh500vQUnk7hF'
        //     );
        //     $stripe->prices->update(
        //         'price_1Kq8ZNLRABgW92OXzIl39wWT',
        //         ['metadata' => ['order_id' => '6735']]
        //     );

        //     $stripe = new \Stripe\StripeClient(
        //         'sk_test_51KmBUpLRABgW92OXYrVXhuF7OaInPaaaZt3xn3DZdnxPhc1V0ET4uCPD8M1wI3Dhods0DdBmBPIXsp9y8OebyAh500vQUnk7hF'
        //     );

        //     $price = $stripe->prices->create([
        //         'unit_amount' => $request->price ,
        //         'currency' => 'eur',
        //         'recurring' => ['interval' => $request->runtime],
        //         'product' => $product->id,
        //     ]);


        //     $cost_overview = new VariantPlan();
        //     $cost_overview->variant_id = $product->id;
        //     $cost_overview->plan = $request->runtime;
        //     $cost_overview->price_token = $price->id;
        //     $cost_overview->price = $request->price;
        //     $cost_overview->save();

        //     }else{

        //         $product = Variant::where('name',$request->name)->first();

        //         $stripe = new \Stripe\StripeClient(
        //             'sk_test_51KmBUpLRABgW92OXYrVXhuF7OaInPaaaZt3xn3DZdnxPhc1V0ET4uCPD8M1wI3Dhods0DdBmBPIXsp9y8OebyAh500vQUnk7hF'
        //         );

        //         $price = $stripe->prices->create([
        //             'unit_amount' => $request->price ,
        //             'currency' => 'eur',
        //             'recurring' => ['interval' => $request->runtime],
        //             'product' => $product->variant_id,
        //         ]);


        //         $cost_overview = new VariantPlan();
        //         $cost_overview->variant_id = $product->variant_id;
        //         $cost_overview->plan = $request->runtime;
        //         $cost_overview->price_token = $price->id;
        //         $cost_overview->price = $request->price;
        //         $cost_overview->save();

        //     }




        } catch (Exception $th) {
            return back()->withError($th->getMessage())->withInput();
        }
    }

    public function deleteCostOverview(Request $request , $id)
    {
        CostOverview::where('id',$id)->delete();
        return back();
    }


    /*******************
     * ++ storeDiscountCode
     **********************/

    public function storeDiscountCode(Request $request)
    {
        try {



            //return strtotime($request->available_until);

            // get all coupons
            // $stripe = new \Stripe\StripeClient(
            //     'sk_test_51KmBUpLRABgW92OXYrVXhuF7OaInPaaaZt3xn3DZdnxPhc1V0ET4uCPD8M1wI3Dhods0DdBmBPIXsp9y8OebyAh500vQUnk7hF'
            // );
            // $coupons = $stripe->coupons->all();


            //return response()->json($product_price);

            $stripe = new \Stripe\StripeClient(
                'sk_test_51KmBUpLRABgW92OXYrVXhuF7OaInPaaaZt3xn3DZdnxPhc1V0ET4uCPD8M1wI3Dhods0DdBmBPIXsp9y8OebyAh500vQUnk7hF'
            );

            if ($request->duration == 'repeating') {

                if ($request->price) {

                    $price = $request->price * 100;
                    $coupon = $stripe->coupons->create([
                        'id' => $request->code,
                        'amount_off' => $price,
                        'duration' => $request->duration,
                        'redeem_by' => strtotime($request->available_until),
                        'max_redemptions' => $request->code_redemption,
                        'duration_in_months' => $request->duration_in_month,
                        'name' => $request->name,
                    ]);
                } else {
                   $coupon = $stripe->coupons->create([
                        'id' => $request->code,
                        'percent_off' => $request->percentage,
                        'duration_in_months' => $request->duration_in_month,
                        'duration' => $request->duration,
                        'redeem_by' => strtotime($request->available_until),
                        'max_redemptions' => $request->code_redemption,
                        'name' => $request->name,
                    ]);
                }

                // $coupon = $stripe->coupons->create([
                //     'id' => $request->code,
                //     'percent_off' => $request->percentage,
                //     'currency' => 'eur',
                //     //'amount_off' => $request->price,
                //     'duration' => $request->duration,
                //     'redeem_by' => strtotime($request->available_until),
                //     'max_redemptions' => $request->code_redemption,
                //     'name' => $request->name,
                // ]);
            } else {

                if ($request->price) {
                    $price = $request->price * 100;

                    $coupon = $stripe->coupons->create([
                        'id' => $request->code,
                        //'percent_off' => $request->percentage,
                        'currency' => 'eur',
                        'amount_off' => $price,
                        'duration' => $request->duration,
                        'redeem_by' => strtotime($request->available_until),
                        'max_redemptions' => $request->code_redemption,
                        'name' => $request->name,
                    ]);
                } else {
                   $coupon = $stripe->coupons->create([
                        'id' => $request->code,
                        'percent_off' => $request->percentage,
                        'currency' => 'eur',
                        //'amount_off' => $request->price,
                        'duration' => $request->duration,
                        'redeem_by' => strtotime($request->available_until),
                        'max_redemptions' => $request->code_redemption,
                        'name' => $request->name,
                    ]);
                }

                // $coupon = $stripe->coupons->create([
                //     'id' => $request->code,
                //     'percent_off' => $request->percentage,
                //     'currency' => 'eur',
                //     //'amount_off' => $request->price,
                //     //'duration' => $request->duration,
                //     'redeem_by' => strtotime($request->available_until),
                //     'max_redemptions' => $request->code_redemption,
                //     'name' => $request->name,
                // ]);
            }

           //return response()->json($coupon);

            $discount_code = new DiscountCode();
            $discount_code->code = $request->code;
            $discount_code->name = $coupon->name;
            $discount_code->created_by = session('name');
            $discount_code->available_until = $request->available_until;
            $discount_code->max_redemption =  $request->code_redemption;
            $discount_code->code_used =  0;
            $discount_code->price = $request->price;
            $discount_code->discount_type = $request->duration;
            $discount_code->percent = $request->percentage;
            $discount_code->save();


            return redirect()->Route('admin.dashboard')->with('message','coupon added successfully');

        } catch (Exception $th) {
            return back()->withError($th->getMessage())->withInput();
        }
    }

    /*******************
     * ++ storeDiscountCode
     **********************/

    public function updateDiscountCode(Request $request , $id)
    {

        try {

            $stripe = new \Stripe\StripeClient(
                'sk_test_51KmBUpLRABgW92OXYrVXhuF7OaInPaaaZt3xn3DZdnxPhc1V0ET4uCPD8M1wI3Dhods0DdBmBPIXsp9y8OebyAh500vQUnk7hF'
            );

            if ($request->duration == 'repeating') {

                $coupon = $stripe->coupons->update(
                $id,
                [

                    'name' => $request->name,
                ]
                );

            } else {
               $coupon = $stripe->coupons->update(
                $id,
                [

                    'name' => $request->name,
                ]
                );
            }




            $discount_code_update = DiscountCode::where('code',$id)->first();
            $discount_code_update->description = $coupon->name;
            // $discount_code_update->available_until = $request->available_until;
            // $discount_code_update->price = $request->price;
            // $discount_code_update->percent = $coupon->percent_off;
            // $discount_code_update->code_used = $coupon->times_redeemed;
            // $discount_code_update->discount_type = $request->duration;
            $discount_code_update->save();

            return redirect()->Route('admin.dashboard');
        } catch (Exception $th) {
            return back()->withError($th->getMessage())->withInput();
        }
    }

    public function deleteDiscountCode(Request $request , $id)
    {
        $stripe = new \Stripe\StripeClient(
            'sk_test_51KmBUpLRABgW92OXYrVXhuF7OaInPaaaZt3xn3DZdnxPhc1V0ET4uCPD8M1wI3Dhods0DdBmBPIXsp9y8OebyAh500vQUnk7hF'
        );
        $stripe->coupons->delete($id, []);

        DiscountCode::where('code',$id)->delete();
        return back();
    }

    public function addAffiliateProgram(Request $request , $id)
    {
        $add = AffiliateProgram::where('id',$id)->first();
        $add->necessary_referred_clients = $request->necessary_referred_clients;
        $add->discount = $request->discount;
        $add->range_value = $request->range;
        $add->save();

        return back();
    }

}
