<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Client;
use App\Models\User;
use App\Models\Variant;
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
        return view('admin.login');
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

            $is_exists = Admin::where('email',$request->email)->first();

            if ($is_exists) {

                if (Hash::check($request->password, $is_exists->password)) {

                    $last_logged_in = Admin::where('admin_id',$is_exists->admin_id)->update([
                        'last_logged_in' => Carbon::now(),
                        'status' => 'online'
                    ]);

                    if($is_exists->istofactor == 1){

                        $random_code = Str::random(6);

                        $is_exists->random_code = $random_code;
                        $is_exists->save();

                        $name =  $is_exists->name;
                        $email = $is_exists->email;

                        $data = array(
                            'name' => $name,
                            'code' => $random_code,
                        );

                        Mail::send('admin.mail.code', $data , function($message) use ($request , $email){
                            $message->to($email, 'UFILL ECOM SOLUTION')->subject('Two Step Verification Code');
                            $message->from('ufillsolutions@gmail.com','UFILL ECOM SOLUTION');
                        });

                        return redirect()->Route('admin.check.2step',[$is_exists->admin_id,$is_exists->email]);


                    }else{
                        $this->storeSession($is_exists);
                        return redirect()->Route('admin.dashboard');
                    }




                } else {
                    return back()->withError('Oops ! you have entered invalid credentials..')->withInput();
                }

            } else {
                return back()->withError('Oops ! you have entered invalid credentials..')->withInput();
            }


        }catch (QueryException $th) {
           return back()->withError($th->getMessage())->withInput();
        }catch(Exception $th){
            return back()->withError($th->getMessage())->withInput();
        }
    }


    /*******************
     * ++++++ LogOut
     **********************/

    public function logout(Request $request)
    {
        Admin::where('admin_id',session('id'))->update([
            'status' => 'offline'
        ]);
        $request->session()->flush();
        return redirect()->Route('admin.login');
    }


    public function twoStepVerification($admin_id , $email )
    {
        return view('admin.two_step')->with('admin_id',encrypt($admin_id))->with('email',$email)->with('error','');
    }





    public function checkOTP(Request $request , $admin_id , $email)
    {


        $check_code = Admin::where("random_code", $request->code)->first();
        $check_client_code = Client::where("random_code", $request->code)->first();

        if($check_code){

            $is_check= Admin::where("admin_id", decrypt($request->admin_id))->where("random_code", $request->code)->first();
             if($is_check){
                 $this->storeSession($is_check);
                 $is_check->random_code = null;
                 $is_check->save();

                 return redirect()->Route('admin.dashboard');
             } else{
                return view('admin.two_step')->with('admin_id',$admin_id)->with('email',$email)->with('error','code does not matched');
             }
        }elseif($check_client_code){

            $is_check = Client::where("id", decrypt($request->admin_id))->where("random_code", $request->code)->first();

            if ($is_check) {

                $package = Variant::where('variant_id', $is_check->account_type)->first();

                session([
                    'client_id' => $is_check->id,
                    'email' => $is_check->email,
                    'name' => $is_check->first_name . ' ' . $is_check->last_name,
                    'profile_picture' => $is_check->profile_picture,
                    'locale' => $is_check->language,
                    'status' => 'online',
                    'package_name' => $package->name,
                    'company_name' => $is_check->company_name,
                    'stripe_id' => $is_check->stripe_id
                ]);
                $is_check->random_code = null;
                $is_check->save();

                if ($package->name == 'shipment') {
                    return redirect()->Route('client.shipment.delivery');
                } else {
                    return redirect()->Route('client.dashboard');
                }
            } else {
                return view('admin.two_step')->with('admin_id', $admin_id)->with('email', $email)->with('error', 'code does not matched');
            }
        }
        else{
            return view('admin.two_step')->with('admin_id',$admin_id)->with('email',$email)->with('error','code does not matched');
        }

        // if($check_code){
        //     $get_id = decrypt($request->admin_id);

        //     $is_check= Admin::where("admin_id", $get_id)->where("random_code", $request->code)->first();
        //      if($is_check){
        //          $this->storeSession($is_check);
        //          $is_check->random_code = null;
        //          $is_check->save();

        //          return redirect()->Route('admin.dashboard');
        //      } else{
        //         return redirect()->Route('admin.check.verification.code')->withError('code does not matched');
        //      }

        // }else{
        //     return redirect()->Route('admin.check.verification.code')->withError('code does not matched');
        // }

    }


    public function storeSession(Admin $admin)
    {
         session([

                'id' => $admin->admin_id,
                'email' => $admin->email,
                'name' => $admin->name,
                'profile_picture' => $admin->profile_picture,
                'locale' => $admin->language,
                'status' => 'online',

        ]);
    }


}
