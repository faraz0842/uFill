<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\AdminCompany;
use App\Models\ChangeLog;
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

        return view('client.change_log')->with('changelog',$changelog)->with('company_data',$company_data);
    }
}
