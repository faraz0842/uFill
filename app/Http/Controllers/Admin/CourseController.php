<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminCompany;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function courses()
    {
        $company_data = AdminCompany::where('company_id',1)->first();
        return view('admin.courses')->with('company_data',$company_data);
    }
}
