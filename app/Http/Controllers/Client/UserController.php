<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        //return response()->json($user);

        return view('client.users.index')->with('user',$user);
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
        // $request->validate([
        //     'first_name' => 'required',
        //     'last_name' => 'required',
        //     'email' => 'required',
        //     'phone_number' => 'required',
        //     'mobile_number' => 'required',
        //     'street' => 'required',
        //     'house_number' => 'required',
        //     'plz' => 'required',
        //     'location' => 'required',
        //     'land' => 'required',
        //     'language' => 'required',
        //     'password' => 'required',
        //     'role' => 'required'
        // ]);

        try {



            $profile_image = $request->file('profile_image');
            if (isset($profile_image)) {
                $image_name = $profile_image->getClientOriginalName();
                $image_name = str_replace(" ", "_", time() . $image_name);
                $image_path = 'upload/UserImages/';
                $profile_image->move($image_path, $image_name);
                $profile_picture = $image_path.$image_name;
            } else {
                $profile_picture = null;
            }

            $user = new User();
            $user->client_id = 1;
            $user->name = $request->first_name  . ' ' . $request->last_name;
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            $user->phone_number = $request->phone_number;
            $user->mobile_number = $request->mobile_number;
            $user->street = $request->street;
            $user->house_number = $request->house_number;
            $user->plz = $request->plz;
            $user->ort = $request->ort;
            $user->land = $request->land;
            $user->language = $request->language;
            $user->role = $request->user_role;
            $user->profile_pic = $profile_picture;
            $user->save();

            return redirect()->Route('client.users');

        } catch (QueryException $th) {
            return back()->withError($th->getMessage())->withInput();
        } catch(Exception $th){
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

        //return $request->file('profile_image');
        // $request->validate([

        //     'first_name' => 'required',
        //     'last_name' => 'required',
        //     'email' => 'required',
        //     'phone_number' => 'required',
        //     'mobile_number' => 'required',
        //     'street' => 'required',
        //     'house_number' => 'required',
        //     'plz' => 'required',
        //     'location' => 'required',
        //     'land' => 'required',
        //     'language' => 'required',
        //     'password' => 'required',
        //     'user_role' => 'required'
        // ]);

        try {

            $profile_image = $request->file('profile_image');
            if (isset($profile_image)) {
                $image_name = $profile_image->getClientOriginalName();
                $image_name = str_replace(" ", "_", time() . $image_name);
                $image_path = 'upload/UserImages/';
                $profile_image->move($image_path, $image_name);
                $profile_picture = $image_path.$image_name;
            } else {
                $profile_picture = $request->previous_image;
            }

            $user = User::where('id',$id)->first();
            $user->name = $request->first_name  . ' ' . $request->last_name;
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->email = $request->email;
            $user->phone_number = $request->phone_number;
            $user->mobile_number = $request->mobile_number;
            $user->street = $request->street;
            $user->house_number = $request->house_number;
            $user->plz = $request->plz;
            $user->ort = $request->ort;
            $user->land = $request->land;
            $user->language = $request->language;
            $user->role = $request->user_role;
            $user->profile_pic = $profile_picture;
            $user->save();

            return redirect()->Route('client.users');

        } catch (QueryException $th) {
            return back()->withError($th->getMessage())->withInput();
        } catch(Exception $th){
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
        $user_delete = User::where('id',$id)->delete();
        return redirect()->Route('client.users');
    }
}
