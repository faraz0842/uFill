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
        $myRestApiPostURL = curl_init('https://cloud-stage.dpd.com/api/v1/setOrder');

        /* Order Settings */
        $OrderAction = 'startOrder';
        $ShipDate = '2022-08-31';
        $LabelSize = 'PDF_A4';
        $LabelStartPosition = 'UpperLeft';

        /* Ship address */
        $Company = utf8_encode('Mustermann AG');
        $Gender = utf8_encode('male');
        $Salutation = utf8_encode('Mr.');
        $FirstName = utf8_encode('Max');
        $LastName = utf8_encode('Mustermann');
        $Name = utf8_encode('Max Mustermann');
        $Street = utf8_encode('Wailandtstr.');
        $HouseNo = utf8_encode('1');
        $ZipCode = utf8_encode('63741');
        $City = utf8_encode('Aschaffenburg');
        $Country = utf8_encode('DEU');
        $State = utf8_encode('');
        $Phone = utf8_encode('+49 6021 123 456');
        $Mail = utf8_encode('m.mustermann@mustermann.com');

        /* Parcel data */
        $YourInternalID = utf8_encode('123');
        $Content = utf8_encode('Smartphone');
        $Weight = utf8_encode('13.5');
        $Reference1 = utf8_encode('Customer email');
        $Reference2 = utf8_encode('Order number');
        $ShipService = utf8_encode('Classic');

        $mySetOrderJSONString = '{"OrderAction":"' . $OrderAction . '","OrderSettings":{"ShipDate":"' . $ShipDate . '","LabelSize":"' . $LabelSize . '", "LabelStartPosition":"' . $LabelStartPosition . '"},"OrderDataList":[{"ShipAddress":{"Company":"' . $Company . '","Gender":"' . $Gender . '","Salutation":"' . $Salutation . '","FirstName":"' . $FirstName . '","LastName":"' . $LastName . '","Name":"' . $Name . '","Street":"' . $Street . '","HouseNo":"' . $HouseNo . '","ZipCode":"' . $ZipCode . '","City":"' . $City . '","Country":"' . $Country . '", "State":"' . $State . '", "Phone":"' . $Phone . '", "Mail":"' . $Mail . '"},"ParcelData":{"YourInternalID":"' . $YourInternalID . '","Content":"' . $Content . '","Weight":"' . $Weight . '","Reference1":"' . $Reference1 . '","Reference2":"' . $Reference2 . '", "ShipService":"' . $ShipService . '"}}]}';

        curl_setopt_array(
            $myRestApiPostURL,
            array(

                CURLOPT_POST => TRUE,
                CURLOPT_RETURNTRANSFER => TRUE,
                CURLOPT_ENCODING => "UTF-8",
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json',
                    'Version : ' . '100',
                    'Language : ' . 'de_DE',
                    'PartnerCredentials-Name : ' . 'DPD Sandbox',
                    'PartnerCredentials-Token : ' . '06445364853584D75564',
                    'UserCredentials-cloudUserID : ' . '2782661',
                    'UserCredentials-Token : ' . '36664271507431674845'
                ),
                CURLOPT_POSTFIELDS => $mySetOrderJSONString,
                CURLOPT_SSL_VERIFYHOST => false,
                CURLOPT_SSL_VERIFYPEER => false
            )

        );

        $setOrderResponse = curl_exec($myRestApiPostURL);
        echo $setOrderResponse;
    }
}
