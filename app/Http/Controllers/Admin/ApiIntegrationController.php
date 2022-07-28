<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ApiIntegration;
use Exception;
use Illuminate\Http\Request;

class ApiIntegrationController extends Controller
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
            'platform' => 'required',
            'api_key' => 'required',
            'secret_key' => 'required',
            'status' => 'required'
        ]);

        try {

                $check_api = ApiIntegration::where('api_key',$request->api_key)->orWhere('secret_key',$request->secret_key)->first();

                if(!$check_api){

                    $api_integration = new ApiIntegration();
                    $api_integration->platform = $request->platform;
                    $api_integration->api_key = $request->api_key;
                    $api_integration->secret_key = $request->secret_key;
                    $api_integration->status = $request->status;
                    $api_integration->save();

                }

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
            'platform' => 'required|unique:api_integration,platform,' . $id . ',id',
            'api_key' => 'required',
            'secret_key' => 'required',
            'status' => 'required'
        ]);

        try {

            $api_integration = ApiIntegration::where('id',$id)->first();
            $api_integration->platform = $request->platform;
            $api_integration->api_key = $request->api_key;
            $api_integration->secret_key = $request->secret_key;
            $api_integration->status = $request->status;
            $api_integration->save();

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
         ApiIntegration::where('id',$id)->delete();
         return back();
    }
}
