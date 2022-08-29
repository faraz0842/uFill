<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\AffiliateLink;
use App\Models\Client;
use App\Models\ClientCardDetail;
use App\Models\ShippingDetail;
use App\Models\Subscription;
use App\Models\Variant;
use App\Models\VariantPlan;
use Carbon\Carbon;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use PDF;
use App\Helpers\Helper;
use App\Models\AdminCompany;
use App\Models\Transaction;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::leftJoin('subscriptions', 'subscriptions.client_id', 'clients.id')
            ->join('variants', 'variants.variant_id', 'clients.account_type')
            ->select(
                'clients.*',
                'subscriptions.id as subscription_id',
                'subscriptions.client_id',
                'subscriptions.name as subscription_name',
                'subscriptions.stripe_status',
                'variants.variant_id',
                'variants.name as variant_name',
                'variants.variant_id',
                'variants.name as variant_name'
            )->get();
        // return response()->json($clients);

        return view('admin.client.index')->with('clients', $clients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, $stripe_id)
    {
        $variants = Variant::all();
        $stripe = new \Stripe\StripeClient(
            'sk_test_51KmBUpLRABgW92OXYrVXhuF7OaInPaaaZt3xn3DZdnxPhc1V0ET4uCPD8M1wI3Dhods0DdBmBPIXsp9y8OebyAh500vQUnk7hF'
        );

        $invoices =  $stripe->invoices->all(['customer' => $stripe_id]);

        $affiliated_at = AffiliateLink::where('affiliate_from', $id)->join('clients', 'clients.id', 'affiliate_link.affiliate_from')->get();

        //return response()->json($invoices->data);
        //$shipping_details = ShippingDetail::all();
        $today_shipments = ShippingDetail::whereDate('created_at', Carbon::today())->get();
        $this_week_shipments = ShippingDetail::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();
        $last_week_shipments = ShippingDetail::whereBetween('created_at', [Carbon::now()->subWeek()->startOfWeek(), Carbon::now()->subWeek()->endOfWeek()])->get();
        $this_month_shipments = ShippingDetail::whereMonth('created_at', Carbon::now()->month)->get();
        $last_month_shipments = ShippingDetail::whereBetween('created_at', [Carbon::now()->subMonth()->startOfMonth(), Carbon::now()->subMonth()->endOfMonth()])->get();
        $this_year_shipments = ShippingDetail::whereYear('created_at', date('Y'))->get();
        $last_year_shipments = ShippingDetail::whereMonth('created_at', Carbon::now()->month)->get();

        $card_details = ClientCardDetail::where('client_id', $id)->get();

        $variant_name = Variant::where('name', 'team')->first();
        $client_users = Client::where('account_type', $variant_name->variant_id)->count();
        $date = Carbon::now();
        $current_date = $date->toDateTimeString();

        //return response()->json($client_users);

        $client = Client::where('clients.id', $id)->leftJoin('subscriptions', 'subscriptions.client_id', 'clients.id')
            ->join('variants', 'variants.variant_id', 'clients.account_type')
            ->select(
                'clients.*',
                'subscriptions.id as subscription_id',
                'subscriptions.client_id',
                'subscriptions.name as subscription_name',
                'subscriptions.stripe_status',
                'variants.variant_id',
                'variants.name as variant_name'
            )->first();

        $referred_clients = AffiliateLink::where('affiliate_from', $client->id)->count();

        //return response()->json($client);
        return view('admin.client.view')->with('client', $client)->with('today_shipments', $today_shipments)->with('affiliated_at', $affiliated_at)->with('client_users', $client_users)
            ->with('variants', $variants)->with('invoices', $invoices->data)->with('card_details', $card_details)->with('referred_clients', $referred_clients)
            ->with('this_week_shipments', $this_week_shipments)->with('last_week_shipments', $last_week_shipments)->with('this_month_shipments', $this_month_shipments)
            ->with('last_month_shipments', $last_month_shipments)->with('this_year_shipments', $this_year_shipments)->with('last_year_shipments', $last_year_shipments)
            ->with('current_date', $current_date);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {


            $company_logo = $request->file('company_logo');
            if (isset($company_logo)) {
                $image_name = $company_logo->getClientOriginalName();
                $image_name = str_replace(" ", "_", time() . $image_name);
                $image_path = 'upload/CompanyLogo/';
                $company_logo->move($image_path, $image_name);
                $logo = $image_path . $image_name;
            } elseif ($request->avatar_remove == 1) {
                $logo = null;
            } else {
                $logo = $request->previous_image;
            }

            $client = Client::where('id', $id)->first();
            $client->company_name  = $request->company_name;
            $client->first_name  = $request->first_name;
            $client->last_name  = $request->last_name;
            $client->street  = $request->street;
            $client->house_number  = $request->house_number;
            $client->plz  = $request->plz;
            $client->state  = $request->state;
            $client->country  = $request->country;
            $client->telephone  = $request->telephone;
            $client->mobile_number  = $request->mobile_number;
            $client->language  = $request->language;
            $client->email  = $request->email;
            $client->vat_id  = $request->vat_id;
            $client->registration_number  = $request->registration_number;
            $client->website  = $request->website;
            $client->company_size  = $request->company_size;
            $client->company_description  = $request->company_description;
            $client->profile_picture = $logo;
            $client->referral_link = 'ufill.devatease.com/client/register/' . $request->company_name . '-' . session('client_id');
            $client->save();

            //updating customer in stripe
            $stripe = new \Stripe\StripeClient(
                'sk_test_51KmBUpLRABgW92OXYrVXhuF7OaInPaaaZt3xn3DZdnxPhc1V0ET4uCPD8M1wI3Dhods0DdBmBPIXsp9y8OebyAh500vQUnk7hF'
            );
            $stripe->customers->update(
                $client->stripe_id,
                [
                    'address' => [
                        'country' => $request->country,
                        'line1' => $request->street,
                        'line2' => $request->house_number,
                        'postal_code' => $request->plz,
                        'state' => $request->state
                    ],
                    'email' => $request->email,
                    'name' => $request->first_name . ' ' . $request->last_name,
                    'phone' => $request->telephone,
                ]
            );


            return back();
        } catch (\Exception $th) {
            return back()->withError($th->getMessage())->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Client::where('id', $id)->delete();
        return back();
    }

    public function updateVariant(Request $request, $client_id)
    {

        //return $request->account_type . ' ' . $request->account_plan_selected;

        try {

            $client_subcription_id = Subscription::where('client_id', $client_id)->first();
            $price_id = VariantPlan::where('variant_id', $request->account_type)->where('plan', $request->account_plan_selected)->first();

            //return $price_id;

            // $stripe = new \Stripe\StripeClient(
            //     'sk_test_51KmBUpLRABgW92OXYrVXhuF7OaInPaaaZt3xn3DZdnxPhc1V0ET4uCPD8M1wI3Dhods0DdBmBPIXsp9y8OebyAh500vQUnk7hF'
            // );
            \Stripe\Stripe::setApiKey('sk_test_51KmBUpLRABgW92OXYrVXhuF7OaInPaaaZt3xn3DZdnxPhc1V0ET4uCPD8M1wI3Dhods0DdBmBPIXsp9y8OebyAh500vQUnk7hF');

            $subscription = \Stripe\Subscription::retrieve($client_subcription_id->stripe_id);
            $subsciption_updated = \Stripe\Subscription::update($client_subcription_id->stripe_id, [
                'cancel_at_period_end' => false,
                'proration_behavior' => 'create_prorations',
                'items' => [
                    [
                        'id' => $subscription->items->data[0]->id,
                        'price' => $price_id->price_token,
                    ],
                ],
            ]);

            Client::where('id', $client_id)->update([
                'account_type' => $request->account_type,
                'account_plan' => $request->account_plan_selected,
                'client_until' => Carbon::parse($subsciption_updated->current_period_end),
                'next_payment' => Carbon::parse($subsciption_updated->current_period_end),
                'package_price' => $price_id->price,
            ]);

            $transaction = new Transaction();
            $transaction->client_id = $client_id;
            $transaction->package_id = $price_id->plan_id;
            $transaction->amount = $price_id->price;
            $transaction->discount_price = 0;
            $transaction->save();

            // $subscription_updated = \Stripe\Subscription::retrieve($client_subcription_id->stripe_id);
            // return response()->json($subscription_updated);




            return back()->with('message', 'Account Information Updated Succesfully')->withInput();
        } catch (\Exception $th) {
            return back()->withError($th->getMessage())->withInput();
        }
    }

    public function cancelSubscription(Request $request, $client_id)
    {
        try {

            $stripe_id = Subscription::where('client_id', $client_id)->first();


            if ($request->termination_option == "terminate") {

                $stripe = new \Stripe\StripeClient(
                    'sk_test_51KmBUpLRABgW92OXYrVXhuF7OaInPaaaZt3xn3DZdnxPhc1V0ET4uCPD8M1wI3Dhods0DdBmBPIXsp9y8OebyAh500vQUnk7hF'
                );

                $stripe->subscriptions->cancel(
                    $stripe_id->stripe_id,
                    []
                );

                $stripe_id->update([
                    'stripe_status' => 'Cancelled'
                ]);

                Client::where('id', $client_id)->delete();

                return redirect()->Route('admin.clients');
            } else {

                \Stripe\Stripe::setApiKey('sk_test_51KmBUpLRABgW92OXYrVXhuF7OaInPaaaZt3xn3DZdnxPhc1V0ET4uCPD8M1wI3Dhods0DdBmBPIXsp9y8OebyAh500vQUnk7hF');

                \Stripe\Subscription::update(
                    $stripe_id->stripe_id,
                    [
                        'pause_collection' => [
                            'behavior' => 'mark_uncollectible',
                        ],
                    ]
                );

                $stripe_id->update([
                    'stripe_status' => 'Pause'
                ]);

                Client::where('id', $client_id)->update([
                    'reason_of_termination' => $request->reason,
                ]);

                return back()->with('message', 'Subscription Pause succesfully')->withInput();
            }
        } catch (\Exception $th) {
            return back()->withError($th->getMessage())->withInput();
        }
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

       //return response()->json($invoice);
        $created_date = Carbon::parse($invoice->created);
        $period_end = Carbon::parse($invoice->period_end);

        $company_detail = AdminCompany::where('company_id', 1)->first();
        $client = Client::where('stripe_id', $invoice->customer)->first();

        //return response()->json($invoice);

        return view('admin.client.invoice')->with('invoice', $invoice)->with('created_date', $created_date)->with('client', $client)
            ->with('period_end', $period_end)->with('company_detail', $company_detail);
    }

    public function invoicePrint($invoice_id)
    {
        $stripe = new \Stripe\StripeClient(
            'sk_test_51KmBUpLRABgW92OXYrVXhuF7OaInPaaaZt3xn3DZdnxPhc1V0ET4uCPD8M1wI3Dhods0DdBmBPIXsp9y8OebyAh500vQUnk7hF'
        );

        $invoice = $stripe->invoices->retrieve(
            $invoice_id,
            []
        );

        $company_detail = AdminCompany::where('company_id', 1)->first();
        $client = Client::where('stripe_id', $invoice->customer)->first();

        //return response()->json($invoice);

        return view('admin.client.invoice_print')->with('invoice', $invoice)->with('client', $client)->with('company_detail', $company_detail);
    }


    public function changeProductPrices(Request $request)
    {
        $value = $request->value;
        $info = VariantPlan::where('variant_id', $value)->get();
        $data = array();
        foreach ($info as $value) {
            $data[] = [
                "plan" => $value->plan,
                "price" => Helper::money_format('EUR', 'de_DE', $value->price)
            ];
        }
        return response()->json($data);
    }

    public function updateShippingQuantity(Request $request, $id)
    {
        Client::where('id', $id)->update([

            'shipping_quantity' => $request->shipping_quantity

        ]);

        return back()->with('message', 'Shipping Quantity have been updated');
    }
}
