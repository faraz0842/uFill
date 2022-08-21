<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Client;
use App\Models\Variant;
use App\Models\User;
use Carbon\Carbon;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class LoginController extends Controller
{

    /*******************
     * ++++++ LoginView
     **********************/

    public function login()
    {
        return view('client.login');
    }



    /*******************
     * ++++++ checkLogin
     **********************/

    public function checkLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        try {

            $is_exists = Client::where('email', $request->email)->first();


            if ($is_exists) {

                $package = Variant::where('variant_id', $is_exists->account_type)->first();

                if (Hash::check($request->password, $is_exists->password)) {

                    $last_logged_in = Client::where('id', $is_exists->id)->update([
                        'last_logged_in' => Carbon::now(),
                        'status' => 'online'
                    ]);

                    if ($is_exists->istofactor == 1) {

                        $random_code = Str::random(6);

                        $is_exists->random_code = $random_code;
                        $is_exists->save();

                        $name =  $is_exists->first_name . ' ' . $is_exists->last_name;
                        $email = $is_exists->email;

                        $data = array(
                            'name' => $name,
                            'code' => $random_code,
                        );

                        Mail::send('admin.mail.code', $data, function ($message) use ($request, $email) {
                            $message->to($email, 'UFILL ECOM SOLUTION')->subject('Two Step Verification Code');
                            $message->from('ufillsolutions@gmail.com', 'UFILL ECOM SOLUTION');
                        });

                        return redirect()->Route('admin.check.2step', [$is_exists->id, $is_exists->email]);
                    } else {
                        session([
                            'client_id' => $is_exists->id,
                            'email' => $is_exists->email,
                            'name' => $is_exists->first_name . ' ' . $is_exists->last_name,
                            'profile_picture' => $is_exists->profile_picture,
                            'locale' => $is_exists->language,
                            'status' => 'online',
                            'package_name' => $package->name,
                            'company_name' => $is_exists->company_name,
                            'stripe_id' => $is_exists->stripe_id
                        ]);
                        if ($package->name == 'shipment') {
                            return redirect()->Route('client.shipment.delivery');
                        } else {
                            return redirect()->Route('client.dashboard');
                        }
                    }




                } else {
                    return back()->withError('Oops ! you have entered invalid credentials..')->withInput();
                }
            } else {
                return back()->withError('Oops ! you have entered invalid credentials..')->withInput();
            }
        } catch (QueryException $th) {
            return back()->withError($th->getMessage())->withInput();
        } catch (Exception $th) {
            return back()->withError($th->getMessage())->withInput();
        }
    }


    /*******************
     * ++++++ LogOut
     **********************/

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->Route('client.login');
    }



    /*******************
     * ++++++ Dashboard
     **********************/

    public function dashboard()
    {
        return view('client.dashboard');
    }
}
