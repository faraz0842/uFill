<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ShipmentpackageFee;
use App\Models\ShippingDetail;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class ShippingController extends Controller
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
    public function store(Request $request)
    {
        $request->validate([
            'carrier' => 'required',
            'weight' => 'required',
            'max_width' => 'required',
            'max_height' => 'required',
            'max_length' => 'required',
            'cost' => 'required',
        ]);

        try {

            $shipping = new  ShippingDetail();
            $shipping->carrier = $request->carrier;
            // $shipping->method = $request->shipping_method;
            $shipping->weight = $request->weight;
            $shipping->max_width = $request->max_width;
            $shipping->max_height = $request->max_height;
            $shipping->max_length = $request->max_length;
            $shipping->cost = $request->cost;
            $shipping->fees = $request->fee;
            $shipping->save();

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
    public function update(Request $request, $id)
    {
         $request->validate([
            'carrier' => 'required',
            'weight' => 'required',
            'max_width' => 'required',
            'max_height' => 'required',
            'max_length' => 'required',
            'cost' => 'required',
        ]);

        try {

            $shipping = ShippingDetail::where('shipping_id',$id)->first();
            $shipping->carrier = $request->carrier;
            // $shipping->method = $request->shipping_method;
            $shipping->weight = $request->weight;
            $shipping->max_width = $request->max_width;
            $shipping->max_height = $request->max_height;
            $shipping->max_length = $request->max_length;
            $shipping->cost = $request->cost;
            $shipping->fees = $request->fee;
            $shipping->save();

            return back();


        } catch (Exception $th) {
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
        ShippingDetail::where('shipping_id',$id)->delete();
        return back();
    }

    public function storePackageFee(Request $request)
    {
        try {

            $shipment_package_fee = new ShipmentpackageFee();
            $shipment_package_fee->package = $request->monthly_package;
            $shipment_package_fee->package_fee = $request->fee;
            $shipment_package_fee->save();

            return back();

        } catch (QueryException $ex) {
            return back()->withError($ex->getMessage())->withInput();
        } catch (Exception $ex) {
            return back()->withError($ex->getMessage())->withInput();
        }
    }

    public function UpdatePackageFee(Request $request , $fee_id)
    {
        try {

            $shipment_package_fee = ShipmentpackageFee::where('fee_id',$fee_id)->first();
            $shipment_package_fee->package = $request->monthly_package;
            $shipment_package_fee->package_fee = $request->fee;
            $shipment_package_fee->save();

            return back();

        } catch (QueryException $ex) {
            return back()->withError($ex->getMessage())->withInput();
        } catch (Exception $ex) {
            return back()->withError($ex->getMessage())->withInput();
        }
    }
}
