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
        $url = "https://cig.dhl.de/services/sandbox/soap/validateShipment";

        $curl = curl_init($url);
        $username = "ufill-dev";
        $password = 'q-jX{\t^{D[f5)g<i:8fV-';


        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        $headers = array(
            "Content-Type: application/xml",
            "Accept: application/xml",
            'Authorization: Basic ' . base64_encode($username . ':' . $password),
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);

        $data = '
            <soapenv:Envelope xmlns:soapenv="http://schemas.xmlsoap.org/soap/envelope/" xmlns:cis="http://dhl.de/webservice/cisbase" xmlns:ns="http://dhl.de/webservices/businesscustomershipping/3.0">
               <soapenv:Header>
                  <cis:Authentification>
                     <cis:user>2222222222_01</cis:user>
                     <cis:signature>pass</cis:signature>
                  </cis:Authentification>
               </soapenv:Header>
               <soapenv:Body>
                  <ns:ValidateShipmentOrderRequest>
                     <ns:Version>
                        <majorRelease>3</majorRelease>
                        <minorRelease>1</minorRelease>
                     </ns:Version>
                     <ShipmentOrder>
                        <sequenceNumber></sequenceNumber>
                        <Shipment>
                           <ShipmentDetails>
                              <product>V01PAK</product>
                              <cis:accountNumber>22222222220104</cis:accountNumber>
                              <customerReference>Ref. 123456</customerReference>
                              <shipmentDate>2022-08-04</shipmentDate>
                              <costCentre></costCentre>
                              <ShipmentItem>
                                 <weightInKG>5</weightInKG>
                                 <lengthInCM>60</lengthInCM>
                                 <widthInCM>30</widthInCM>
                                 <heightInCM>15</heightInCM>
                              </ShipmentItem>
                              <Service>
                              </Service>
                              <Notification>
                                 <recipientEmailAddress>empfaenger@test.de</recipientEmailAddress>
                              </Notification>
                           </ShipmentDetails>
                           <Shipper>
                              <Name>
                                 <cis:name1>Absender Zeile 1</cis:name1>
                                 <cis:name2>Absender Zeile 2</cis:name2>
                                 <cis:name3>Absender Zeile 3</cis:name3>
                              </Name>
                              <Address>
                                 <cis:streetName>Vegesacker Heerstr.</cis:streetName>
                                 <cis:streetNumber>111</cis:streetNumber>
                                 <cis:zip>28757</cis:zip>
                                 <cis:city>Bremen</cis:city>
                                 <cis:Origin>
                                    <cis:country></cis:country>
                                    <cis:countryISOCode>DE</cis:countryISOCode>
                                 </cis:Origin>
                              </Address>
                              <Communication>
                                 <!--Optional:-->
                                 <cis:phone>+49421987654321</cis:phone>
                                 <cis:email>absender@test.de</cis:email>
                                 <!--Optional:-->
                                 <cis:contactPerson>Kontaktperson Absender</cis:contactPerson>
                              </Communication>
                           </Shipper>
                           <Receiver>
                              <cis:name1>EmpfÃ¿nger Zeile 1</cis:name1>
                              <Address>
                                 <cis:name2>EmpfÃ¿nger Zeile 2</cis:name2>
                                 <cis:name3>EmpfÃ¿nger Zeile 3</cis:name3>
                                 <cis:streetName>An der Weide</cis:streetName>
                                 <cis:streetNumber>50a</cis:streetNumber>
                                 <cis:zip>28195</cis:zip>
                                 <cis:city>Bremen</cis:city>
                                 <cis:Origin>
                                    <cis:country></cis:country>
                                    <cis:countryISOCode>DE</cis:countryISOCode>
                                 </cis:Origin>
                              </Address>
                              <Communication>
                                 <cis:phone>+49421123456789</cis:phone>
                                 <cis:email>empfaenger@test.de</cis:email>
                                 <cis:contactPerson>Kontaktperson EmpfÃ¿nger</cis:contactPerson>
                              </Communication>
                           </Receiver>
                        </Shipment>
                        <PrintOnlyIfCodeable active="1"/>
                     </ShipmentOrder>
                     <labelResponseType>URL</labelResponseType>
                     <groupProfileName></groupProfileName>
                     <labelFormat></labelFormat>
                     <labelFormatRetoure></labelFormatRetoure>
                     <combinedPrinting>0</combinedPrinting>
                  </ns:ValidateShipmentOrderRequest>
               </soapenv:Body>
            </soapenv:Envelope>
        ';

        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

        //for debug only!
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $resp = curl_exec($curl);
        curl_close($curl);


        var_dump($resp);
    }
}
