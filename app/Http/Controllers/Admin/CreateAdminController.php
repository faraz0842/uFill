<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class CreateAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admin = Admin::all();
        return view('admin.admins.index')->with('admin',$admin);
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
            'first_name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'password' => 'required',
            'street' => 'required',
            'house_number' => 'required',
            'phone' => 'required',
            'mobile' => 'required',
            'zip_code' => 'required',
            'city' => 'required',
            'country' => 'required',
            'language' => 'required',
        ]);

        try {

            $profile_picture = $request->file('profile_picture');
            if (isset($profile_picture)) {
                $image_name = $profile_picture->getClientOriginalName();
                $image_name = str_replace(" ", "_", time() . $image_name);
                $image_path = 'upload/StaffImages/';
                $profile_picture->move($image_path, $image_name);
                $profile = $image_path.$image_name;
            } else {
                $profile = null;
            }


            $admin = new Admin();
            $admin->first_name = $request->first_name;
            $admin->surname = $request->surname;
            $admin->email = $request->email;
            $admin->name = $request->first_name . ' ' . $request->surname;
            $admin->password = bcrypt($request->password);
            $admin->street = $request->street;
            $admin->house_number = $request->house_number;
            $admin->phone = $request->phone;
            $admin->mobile = $request->mobile;
            $admin->zip_code = $request->zip_code;
            $admin->city = $request->city;
            $admin->country = $request->country;
            $admin->language = $request->language;
            $admin->profile_picture = $profile;
            $admin->save();

            Admin::where('admin_id',$admin->admin_id)->update([
                'referral_link' => 'ufill.swamenterprises.com/client/register/ufill-'.$admin->admin_id,
            ]);


            $token = Str::random(64);

            DB::table('password_resets')->insert([
                'email' => $request->email,
                'token' => $token,
                'created_at' => Carbon::now()
                ]);

            $name = $request->first_name . ' ' . $request->surname;
            $email = $request->email;
            // $password = $admin->password;
            $data = array(
                'name' => $name,
                'email' => $email,
                // 'password' => $password,
                'token' => $token,
            );

            Mail::send('admin.mail.welcome_email', $data , function($message) use($request){
                $message->to($request->email);
                $message->subject('Account Login Credentials');
                $message->to($request->email, 'UFILL ECOM SOLUTION');
                $message->from('ufillsolutions@gmail.com','UFILL ECOM SOLUTION');
            });

            return  redirect()->Route('admin.admins')->withSuccess('message' , 'New User has been created and credentials are emailed to him..');


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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Admin::where('admin_id',$id)->delete();
        return redirect()->Route('admin.admins');
    }

    public function changeStatus($status)
    {
        Admin::where('admin_id',session('id'))->update([
            'status' => $status
        ]);

        session([
            'status' => $status
        ]);
        return back();
    }
}
