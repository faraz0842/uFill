<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\AdminCompany;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $company_data = AdminCompany::where('company_id',1)->first();
        $news = News::orderBy('created_at','DESC')->get();
        return view('client.news')->with('news',$news)->with('company_data',$company_data);
    }
}
