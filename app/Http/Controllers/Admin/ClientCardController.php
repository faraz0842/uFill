<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\ClientCardDetail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class ClientCardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request ,$id)
    {
        try {

            $client = Client::where('id',$id)->first();

            $stripe = new \Stripe\StripeClient(
                'sk_test_51KmBUpLRABgW92OXYrVXhuF7OaInPaaaZt3xn3DZdnxPhc1V0ET4uCPD8M1wI3Dhods0DdBmBPIXsp9y8OebyAh500vQUnk7hF'
            );
            $store_payment_method = $stripe->paymentMethods->create([
                'type' => 'card',
                'card' => [
                    'number' => $request->card_number,
                    'exp_month' => $request->card_expiry_month,
                    'exp_year' => $request->card_expiry_year,
                    'cvc' => $request->card_cvv,
                ],
                'billing_details' => [
                    'address' => [
                        'country' => $client->country,
                        'postal_code' => $client->plz,
                        'state' => $client->state,
                    ],
                    'email' => $client->email,
                    'name' => $request->card_name,
                    'phone' => $client->mobile_number,
                ],
            ]);


            $stripe = new \Stripe\StripeClient(
                'sk_test_51KmBUpLRABgW92OXYrVXhuF7OaInPaaaZt3xn3DZdnxPhc1V0ET4uCPD8M1wI3Dhods0DdBmBPIXsp9y8OebyAh500vQUnk7hF'
            );
            $attach_card_to_client = $stripe->paymentMethods->attach(
                $store_payment_method->id,
                ['customer' => $client->stripe_id]
            );


            if ($request->type == 'on') {
                ClientCardDetail::where('client_id',$id)->update([
                    'type' => null
                ]);


                $card = new ClientCardDetail();
                $card->card_id = $store_payment_method->id;
                $card->client_id = $id;
                $card->card_name = $request->card_name;
                $card->card_number = Crypt::encryptString($request->card_number);
                $card->expiry_month = $request->card_expiry_month;
                $card->expiry_year = $request->card_expiry_year;
                $card->cvv = Crypt::encryptString($request->card_cvv);
                $card->type = 'default';
                $card->save();

                $stripe = new \Stripe\StripeClient(
                    'sk_test_51KmBUpLRABgW92OXYrVXhuF7OaInPaaaZt3xn3DZdnxPhc1V0ET4uCPD8M1wI3Dhods0DdBmBPIXsp9y8OebyAh500vQUnk7hF'
                );
                $stripe->customers->update(
                    $client->stripe_id,
                    [
                        'invoice_settings' => [
                            'default_payment_method' => $store_payment_method->id
                        ]
                    ]
                );

            } else {

                $card = new ClientCardDetail();
                $card->card_id = $store_payment_method->id;
                $card->client_id = $id;
                $card->card_name = $request->card_name;
                $card->card_number = Crypt::encryptString($request->card_number);
                $card->expiry_month = $request->card_expiry_month;
                $card->expiry_year = $request->card_expiry_year;
                $card->cvv = Crypt::encryptString($request->card_cvv);
                $card->type = null;
                $card->save();
            }




            //return response()->json($store_payment_method);

            return back();

        } catch (Exception $th) {
            return back()->withError($th->getMessage())->withInput();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id , $client_id)
    {
        // $request->validate([
        //     'card_name' => 'required',
        //     'card_number' => 'required',
        //     'card_expiry_month' => 'required',
        //     'card_expiry_year' => 'required',
        //     'card_cvv' => 'required',
        // ]);


        $client = Client::where('id',$client_id)->first();

        $stripe = new \Stripe\StripeClient(
            'sk_test_51KmBUpLRABgW92OXYrVXhuF7OaInPaaaZt3xn3DZdnxPhc1V0ET4uCPD8M1wI3Dhods0DdBmBPIXsp9y8OebyAh500vQUnk7hF'
        );
        $update_card = $stripe->paymentMethods->update(
            $id,
            [
                'card' => [
                    'exp_month' => $request->card_expiry_month,
                    'exp_year' => $request->card_expiry_year,
                ],
                'billing_details' => [
                    'name' => $request->card_name
                ]

            ]
        );

        if ($request->type == 'on') {

            ClientCardDetail::where('client_id',$client_id)->update([
                'type' => null
            ]);


            $card = ClientCardDetail::where('card_id',$id)->first();
            $card->client_id = $client_id;
            $card->card_name = $request->card_name;
            $card->card_number = Crypt::encryptString($request->card_number);
            $card->expiry_month = $request->card_expiry_month;
            $card->expiry_year = $request->card_expiry_year;
            $card->cvv = $request->card_cvv;
            $card->type = 'default';
            $card->save();

            $stripe = new \Stripe\StripeClient(
                    'sk_test_51KmBUpLRABgW92OXYrVXhuF7OaInPaaaZt3xn3DZdnxPhc1V0ET4uCPD8M1wI3Dhods0DdBmBPIXsp9y8OebyAh500vQUnk7hF'
                );
                $stripe->customers->update(
                    $client->stripe_id,
                    [
                        'invoice_settings' => [
                            'default_payment_method' => $update_card->id
                        ]
                    ]
                );

        } else {

            $card = ClientCardDetail::where('card_id',$id)->first();
            $card->client_id = $client_id;
            $card->card_name = $request->card_name;
            $card->card_number = Crypt::encryptString($request->card_number);
            $card->expiry_month = $request->card_expiry_month;
            $card->expiry_year = $request->card_expiry_year;
            $card->cvv = $request->card_cvv;
            $card->type = null;
            $card->save();
        }


        // $card = ClientCardDetail::where('card_id',$id)->first();
        // $card->card_name = $request->card_name;
        // $card->card_number = $request->card_number;
        // $card->expiry_month = $request->expiry_month;
        // $card->expiry_year = $request->card_expiry_year;
        // $card->cvv = $request->card_cvv;
        // $card->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ClientCardDetail::where('card_id',$id)->delete();
        return back();
    }
}
