<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminCompany;
use App\Models\ChangeLog;
use Exception;
use Illuminate\Http\Request;

class ChangeLogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company_data = AdminCompany::where('company_id',1)->first();
        $changelog = ChangeLog::orderBy('changelog_id','DESC')->get();

        //return response()->json($changelog);


        return view('admin.change_log')->with('changelog',$changelog)->with('company_data',$company_data);
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
       // return $request;
        try {

            $change_log = new ChangeLog();
            $change_log->title = $request->title;
            $change_log->description = $request->description;
            $change_log->title_de = $request->title_de;
            $change_log->description_de = $request->description_de;
            $change_log->version = $request->version;
            $change_log->save();

            return redirect()->Route('admin.changelog');

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
        try {

            $change_log = ChangeLog::where('changelog_id',$id)->first();
            $change_log->title = $request->title;
            $change_log->description = $request->description;
            $change_log->title_de = $request->title_de;
            $change_log->description_de = $request->description_de;
            $change_log->version = $request->version;
            $change_log->save();

            return redirect()->Route('admin.changelog');

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
        ChangeLog::where('changelog_id',$id)->delete();
        return redirect()->Route('admin.changelog');
    }
}
