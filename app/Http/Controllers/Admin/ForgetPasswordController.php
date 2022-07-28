<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\Client;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ForgetPasswordController extends Controller
{
    /**
       * Write code on Method
       *
       * @return response()
       */
      public function showForgetPasswordForm()
      {
         return view('admin.forgetpassword');
      }

      /**
       * Write code on Method
       *
       * @return response()
       */
      public function submitForgetPasswordForm(Request $request)
      {
        $check_email_in_client = Client::where('email',$request->email)->first();
        if($check_email_in_client){

            $request->validate([
              'email' => 'required|email|exists:clients',
            ]);


        }else{

            $request->validate([
              'email' => 'required|email|exists:admins',
            ]);


        }

         $token = Str::random(64);

            DB::table('password_resets')->insert([
              'email' => $request->email,
              'token' => $token,
              'created_at' => Carbon::now()
            ]);

          Mail::send('admin.mail.forgetpassword', ['token' => $token], function($message) use($request){
              $message->to($request->email);
              $message->subject('Forget Password');
          });

          return back()->with('message', 'We have e-mailed your password reset link!');
      }
      /**
       * Write code on Method
       *
       * @return response()
       */
      public function showResetPasswordForm($token) {
         return view('admin.forgetPasswordLink', ['token' => $token]);
      }

      /**
       * Write code on Method
       *
       * @return response()
       */
      public function submitResetPasswordForm(Request $request)
      {

        $check_email_in_client = Client::where('email',$request->email)->first();

        if($check_email_in_client){

            $request->validate([
              'email' => 'required|email|exists:clients',
              'password' => 'required|min:8|confirmed',
              'password_confirmation' => 'required'
          ]);

          $updatePassword = DB::table('password_resets')
                              ->where([
                                'email' => $request->email,
                                'token' => $request->token
                              ])
                              ->first();

          if(!$updatePassword){
              return back()->withInput()->with('error', 'Invalid token!');
          }

          $user = Client::where('email', $request->email)
                      ->update(['password' => Hash::make($request->password)]);

          DB::table('password_resets')->where(['email'=> $request->email])->delete();

          return redirect('/client/login')->with('message', 'Your password has been changed!');

        }else{

            $request->validate([
                'email' => 'required|email|exists:admins',
                'password' => 'required|min:8|confirmed',
                'password_confirmation' => 'required'
            ]);

            $updatePassword = DB::table('password_resets')
                                ->where([
                                    'email' => $request->email,
                                    'token' => $request->token
                                ])
                                ->first();

            if(!$updatePassword){
                return back()->withInput()->with('error', 'Invalid token!');
            }

            $user = Admin::where('email', $request->email)
                        ->update(['password' => Hash::make($request->password)]);

            DB::table('password_resets')->where(['email'=> $request->email])->delete();

            return redirect('/admin/login')->with('message', 'Your password has been changed!');

        }

      }
}
