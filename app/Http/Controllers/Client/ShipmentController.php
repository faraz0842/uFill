<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShipmentController extends Controller
{
    public function createShipmentView()
    {
        // $total = 9.5 + 0.5;
        // return $total;
        return view('client.shipping.create_shipment');
    }

    public function storeShipment(Request $request)
    {
        # code...
    }
}
