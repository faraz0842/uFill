<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\AdminCompany;
use App\Models\AffiliateLink;
use App\Models\ApiIntegration;
use App\Models\Client;
use App\Models\Transaction;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
    public function setting()
    {
        $referred_clients = AffiliateLink::where('affiliate_from_admin',session('id'))->pluck('affiliate_to');
        // $total_revenue = Transaction::select(DB::raw('sum(amount - discount_price) as total'))->whereIn('client_id', $referred_clients)->first();
        $total_revenue = Transaction::select(DB::raw('sum(amount - discount_price) as total'))->first();

        //return response()->json($total_revenue);
        $referred_clients = AffiliateLink::where('affiliate_from_admin',session('id'))->count();

        $total_clients = Client::count();

        $admin_user = Admin::count();

        $setting = Admin::all();
        $company_info = AdminCompany::first();
        return view('admin.settings.settings')->with('setting',$setting)->with('company_info',$company_info)
                                              ->with('total_revenue',$total_revenue)->with('referred_clients',$referred_clients)
                                              ->with('total_clients',$total_clients)->with('admin_user',$admin_user);
    }


    public function updateInfo(Request $request)
    {

        try {
             $image = $request->file('company_profile');
                if (isset($image)) {
                    $image_name = $image->getClientOriginalName();
                    $image_name = str_replace(" ", "_", time() . $image_name);
                    $image_path = 'upload/CompanyProfile/';
                    $image->move($image_path, $image_name);
                    $company_profile = $image_path.$image_name;
                }elseif($request->avatar_remove == 1) {
                    $company_profile = null;
                } else {
                    $company_profile = $request->previous_profile;
                }

            AdminCompany::where('company_id',1)->update([
                'company_profile' => $company_profile,
                'company_name' => $request->company_name,
                'manager_director' => $request->manager_director,
                'house_number' => $request->house_number,
                'zip_code' => $request->zip_code,
                'street' => $request->street,
                'city' => $request->city,
                'address' => $request->street . ' ' . $request->house_number . ' ' . $request->zip_code . ' ' . $request->city . ' ' . $request->country,
                'country' => $request->country,
                'email' => $request->email,
                'phone' => $request->phone,
                'website' => $request->website,
                'vat' => $request->vat,
                'registration_number' => $request->registration_number,
                'language' => $request->language,
                'timezone' => $request->timezone,
                'currency' => $request->currency,
                'facebook_link' => $request->facebook_link,
                'instagram_link' => $request->instagram_link,
                'twitter_link' => $request->twitter_link,
                'youtube_link' => $request->youtube_link,
                'bank_name' => $request->bank_name,
                'account_holder' => $request->account_holder,
                'iban' => $request->iban,
                'bic' => $request->bic,
                'paypal_email' => $request->paypal_email,
            ]);

            return redirect()->Route('admin.overview');
        } catch (Exception $th) {
            return back()->withError($th->getMessage())->withInput();
        }


    }

    public function overview()
    {
        $referred_clients = AffiliateLink::where('affiliate_from_admin',session('id'))->pluck('affiliate_to');
        // $total_revenue = Transaction::select(DB::raw('sum(amount - discount_price) as total'))->whereIn('client_id', $referred_clients)->first();
        $total_revenue = Transaction::select(DB::raw('sum(amount - discount_price) as total'))->first();

        //return response()->json($total_revenue);
        $referred_clients = AffiliateLink::where('affiliate_from_admin',session('id'))->count();

        $total_clients = Client::count();
        $admin_user = Admin::count();

        $company_info = AdminCompany::first();
        return view('admin.settings.overview')->with('company_info',$company_info)
        ->with('total_revenue',$total_revenue)->with('referred_clients',$referred_clients)
                                              ->with('total_clients',$total_clients)
                                              ->with('admin_user',$admin_user);
    }

    public function api()
    {
        $referred_clients = AffiliateLink::where('affiliate_from_admin',session('id'))->pluck('affiliate_to');
        // $total_revenue = Transaction::select(DB::raw('sum(amount - discount_price) as total'))->whereIn('client_id', $referred_clients)->first();
        $total_revenue = Transaction::select(DB::raw('sum(amount - discount_price) as total'))->first();

        //return response()->json($total_revenue);
        $referred_clients = AffiliateLink::where('affiliate_from_admin',session('id'))->count();

        $total_clients = Client::count();

        $admin_user = Admin::count();

        $api_integration = ApiIntegration::all();

        $dhl_count = ApiIntegration::where('platform','dhl')->count();
        $dpd_count = ApiIntegration::where('platform','dpd')->count();
        $ups_count = ApiIntegration::where('platform','ups')->count();
        $amazon_count = ApiIntegration::where('platform','amazon')->count();
        $ebay_count = ApiIntegration::where('platform','ebay')->count();
        $shopify_count = ApiIntegration::where('platform','shopify')->count();
        $company_info = AdminCompany::first();
        return view('admin.settings.api')->with('company_info',$company_info)->with('api_integration',$api_integration)
                                         ->with('dhl_count',$dhl_count)->with('dpd_count',$dpd_count)
                                         ->with('total_revenue',$total_revenue)->with('referred_clients',$referred_clients)
                                         ->with('total_clients',$total_clients)->with('ups_count',$ups_count)
                                         ->with('amazon_count',$amazon_count)->with('ebay_count',$ebay_count)
                                         ->with('shopify_count',$shopify_count)->with('admin_user',$admin_user);
    }

    public function referral()
    {
        $referred_clients = AffiliateLink::where('affiliate_from_admin',session('id'))->pluck('affiliate_to');
        $total_revenue = Transaction::select(DB::raw('sum(amount - discount_price) as total'))->first();

        //return response()->json($total_revenue);
        $referred_clients = AffiliateLink::where('affiliate_from_admin',session('id'))->count();

        $total_clients = Client::count();

        $admin_user = Admin::count();

        $admin_data = Admin::where('admin_id',session('id'))->first();
        $company_info = AdminCompany::first();

        $total_clients = Client::count();
        return view('admin.settings.referral')->with('company_info',$company_info)->with('admin_data',$admin_data)
                                              ->with('total_revenue',$total_revenue)->with('referred_clients',$referred_clients)
                                              ->with('total_clients',$total_clients)->with('admin_user',$admin_user);
    }
}
