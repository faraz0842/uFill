<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\AdminSchedule;
use App\Models\AdminTask;
use App\Models\Client;
use Carbon\Carbon;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;



class ProfileController extends Controller
{
    public function profileView($id)
    {
        $admin = Admin::all();
        $profile = Admin::where('admin_id',$id)->first();
        $tasks = AdminTask::where('assigned_to',$profile->name)->get();
        $schedule = AdminSchedule::where('admin_id',$id)->get();

        $open_tasks = AdminTask::where('status','incomplete')->where('assigned_to',$profile->name)->count();
        //return $profile;
        return view('admin.profile')->with('profile',$profile)->with('tasks',$tasks)
                                    ->with('schedule',$schedule)->with('admin',$admin)
                                    ->with('open_tasks',$open_tasks);
    }

    public function updateProfile(Request $request , $id)
    {
         try {

            //return $request->avatar_remove;
            $profile_picture = $request->file('profile_picture');
            if (isset($profile_picture)) {
                $image_name = $profile_picture->getClientOriginalName();
                $image_name = str_replace(" ", "_", time() . $image_name);
                $image_path = 'upload/StaffImages/';
                $profile_picture->move($image_path, $image_name);
                $profile = $image_path.$image_name;
            } elseif($request->avatar_remove == 1) {
                $profile = null;
            }else{
                $profile = $request->previous_image;
            }


            $admin = Admin::where('admin_id',$id)->first();
            $admin->first_name = $request->first_name;
            $admin->surname = $request->surname;
            $admin->email = $request->email;
            $admin->name = $request->first_name .' ' . $request->surname;
            $admin->street = $request->street;
            $admin->house_number = $request->house_number;
            // $admin->phone = $request->phone;
            //$admin->mobile = $request->mobile;
            $admin->zip_code = $request->zip_code;
            $admin->city = $request->city;
            $admin->country = $request->country;
            $admin->language = $request->language;
            $admin->profile_picture = $profile;
            $admin->save();

            if(session('id') == $id){
                session([
                    'profile_picture' => $profile
                ]);
            }


            return  redirect()->Route('admin.profile',$id);


        } catch (Exception $th) {
            return back()->withError($th->getMessage())->withInput();
        }
    }


    /*********************************
     * ===== Admin Schedule Functions
     *********************************/

     public function storeSchedule(Request $request , $id)
     {
        $request->validate([
            'title' => 'required',
            'date_time' => 'required',
            'leader' => 'required',
            'send_to' => 'required',
        ]);

        try {

            $admin_schedule = new AdminSchedule();
            $admin_schedule->admin_id = $id;
            $admin_schedule->title = $request->title;
            $admin_schedule->date_time = $request->date_time;
            $admin_schedule->leader = $request->leader;
            $admin_schedule->send_to = $request->send_to;
            $admin_schedule->save();

            return redirect()->Route('admin.profile',$id);

        } catch (Exception $th) {
            return back()->withError($th->getMessage())->withInput();
        }
     }

     /*********************************
     * ===== Admin Update Password
     *********************************/

     public function updatePassword(Request $request , $id)
     {
         //return $request->current_password;
        $request->validate([
            'current_password' => 'required',
            'new_password' => 'required',
            'confirm_password' => 'required|same:new_password'
        ]);

        try {

           $is_exists =  Admin::where('admin_id',$id)->first();

           if ($is_exists) {

                if (Hash::check($request->current_password, $is_exists->password)) {
                        $is_exists->update([
                            'password' => bcrypt($request->input('new_password'))
                        ]);
                        return  redirect()->back()->with('message','Your Password Has successfully been updated..');
                } else {
                     return back()->withError('Current Password Does not match')->withInput();
                }
            }

            return redirect()->Route('admin.profile',$id);
        } catch (QueryException $ex) {
            return back()->withError($ex->getMessage())->withInput();
        }catch (Exception $ex) {
            return back()->withError($ex->getMessage())->withInput();
        }
    }

     public function updateEmail(Request $request , $id)
     {

        $email = Admin::where('admin_id',$id)->first();

        $previous_email = $email->email;
        $data = array(
            'name' => $email->name,
            'email'=>$request->email,
        );

        Mail::send('admin.mail.email_change', $data , function($message) use($request , $previous_email){
            $message->subject('Email Confirmation');
            $message->to($previous_email, 'UFILL ECOM SOLUTION');
            $message->from('ufillsolutions@gmail.com','UFILL ECOM SOLUTION');
        });

        $data = array(
            'name' => $email->name,
        );

        Mail::send('admin.mail.email_confirm', $data , function($message) use($request , $email){
            $message->subject('Email Confirmation');
            $message->to($request->email, 'UFILL ECOM SOLUTION');
            $message->from('ufillsolutions@gmail.com','UFILL ECOM SOLUTION');
        });

        $email->email = $request->email;
        $email->save();
        return back();


     }

    public function changeThemeToDark()
    {
        session([
            'theme' => 'dark'
        ]);
        return back();
    }

    public function changeThemeToLight()
    {
        session([
            'theme' => 'light'
        ]);
        return back();
    }

    public function adminTask($id)
    {
        $admin = Admin::all();
        $client = Client::all();
        $tasks = AdminTask::where('assigned_to',session('name'))->get();
        $open_tasks = AdminTask::where('status','incomplete')->where('assigned_to',session('name'))->count();
        return view('admin.admins.task')->with('tasks',$tasks)->with('client',$client)
                                       ->with('open_tasks',$open_tasks)->with('admin',$admin);
    }


    public function forgetPassword($email)
    {
        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $email,
            'token' => $token,
            'created_at' => Carbon::now()
            ]);

        Mail::send('admin.mail.forgetpassword', ['token' => $token], function($message) use($email){
            $message->to($email);
            $message->subject('Forget Password');
        });

        return back();
    }

    public function setUp2FA(Request $request)
    {
       Admin::where('email',$request->email)->update([
           'istofactor' => 1
       ]);

       return back()->withSuccess('Two factor authentication has been activated on your account');
    }

    public function deActivateUp2FA(Request $request , $email)
    {
       Admin::where('email',$email)->update([
           'istofactor' => 0
       ]);

       return back()->withSuccess('Two factor authentication has been Deactivated on your account');
    }



}
