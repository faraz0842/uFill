<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminCompany;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SupportController extends Controller
{
    public function contactFromSubmit(Request $request)
    {
        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
            'msg' => $request->message,
        );

        Mail::send('admin.mail.contact_form', $data , function($message) use ($request ){
            $message->subject($request->subject);
            $message->to('hello@ufill.de');
            $message->from($request->email);
        });


        return back();
    }

    public function contactView()
    {
        $company_data = AdminCompany::where('company_id',1)->first();

        if (session('admin_id')) {

            return view('admin.help.contact')->with('company_data',$company_data);

        } else {

            return view('client.help.contact')->with('company_data',$company_data);

        }

    }

    public function faq()
    {
        $company_data = AdminCompany::where('company_id',1)->first();
        if (session('admin_id')) {

            return view('admin.help.faq')->with('company_data',$company_data);

        } else {

            return view('client.help.faq')->with('company_data',$company_data);

        }
    }

    public function list()
    {
        $company_data = AdminCompany::where('company_id',1)->first();

        if (session('admin_id')) {

            return view('admin.help.list')->with('company_data',$company_data);

        } else {

            return view('client.help.list')->with('company_data',$company_data);

        }

    }

    public function overview()
    {
        $company_data = AdminCompany::where('company_id',1)->first();
        if (session('admin_id')) {

            return view('admin.help.overview')->with('company_data',$company_data);

        } else {

            return view('client.help.overview')->with('company_data',$company_data);

        }

    }
}
