<?php

namespace App\Http\Controllers\Client;

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
        //$referred_clients = AffiliateLink::where('affiliate_from_admin',session('id'))->pluck('affiliate_to');
        // $total_revenue = Transaction::select(DB::raw('sum(amount - discount_price) as total'))->whereIn('client_id', $referred_clients)->first();
        $total_revenue = Transaction::select(DB::raw('sum(amount - discount_price) as total'))->where('client_id',session('client_id'))->first();

        //return response()->json($total_revenue);
        $referred_clients_count = AffiliateLink::where('affiliate_from',session('client_id'))->count();

        $total_clients = Client::count();

        $admin_user = Admin::count();

        $setting = Admin::all();
        $client_info = Client::where('id',session('client_id'))->join('variants','variants.variant_id','clients.account_type')->first();
        return view('client.settings.settings')->with('setting',$setting)->with('client_info',$client_info)
                                              ->with('total_revenue',$total_revenue)->with('referred_clients_count',$referred_clients_count)
                                              ->with('total_clients',$total_clients)->with('admin_user',$admin_user);
    }

    public function updateInfo(Request $request)
    {



        try {
             $image = $request->file('profile_picture');
                if (isset($image)) {
                    $image_name = $image->getClientOriginalName();
                    $image_name = str_replace(" ", "_", time() . $image_name);
                    $image_path = 'upload/CompanyProfile/';
                    $image->move($image_path, $image_name);
                    $profile_picture = $image_path.$image_name;
                }else if($request->avatar_remove){
                    $profile_picture = null;
                }else {
                    $profile_picture = $request->previous_profile;
                    return $profile_picture;
                }


                //return $profile_picture;
            Client::where('id',session('client_id'))->update([
                'profile_picture' => $profile_picture,
                'company_name' => $request->company_name,
                'house_number' => $request->house_number,
                'plz' => $request->zip_code,
                'street' => $request->street,
                'state' => $request->state,
                'country' => $request->country,
                'email' => $request->email,
                'mobile_number' => $request->mobile_number,
                'telephone' => $request->telephone,
                'website' => $request->website,
                'vat_id' => $request->vat,
                'registration_number' => $request->registration_number,
            ]);

            session([
                'profile_picture' => $profile_picture,
            ]);

            return redirect()->Route('client.overview');
        } catch (Exception $th) {
            return back()->withError($th->getMessage())->withInput();
        }


    }

    public function overview()
    {
        //$referred_clients = AffiliateLink::where('affiliate_from_admin',session('id'))->pluck('affiliate_to');
        // $total_revenue = Transaction::select(DB::raw('sum(amount - discount_price) as total'))->whereIn('client_id', $referred_clients)->first();
        $total_revenue = Transaction::select(DB::raw('sum(amount - discount_price) as total'))->where('client_id',session('client_id'))->first();

        //return response()->json($total_revenue);
        $referred_clients_count = AffiliateLink::where('affiliate_from',session('client_id'))->count();

        $total_clients = Client::count();
        $admin_user = Admin::count();

        $client_info = Client::where('id',session('client_id'))->join('variants','variants.variant_id','clients.account_type')
                             ->join('variants_plan','variants_plan.variant_id','clients.account_type')->first();

        return view('client.settings.overview')->with('client_info',$client_info)
                                              ->with('total_revenue',$total_revenue)
                                              ->with('referred_clients_count',$referred_clients_count)
                                              ->with('total_clients',$total_clients)
                                              ->with('admin_user',$admin_user);
    }

    public function api()
    {
        $referred_clients = AffiliateLink::where('affiliate_from_admin',session('id'))->pluck('affiliate_to');
        // $total_revenue = Transaction::select(DB::raw('sum(amount - discount_price) as total'))->whereIn('client_id', $referred_clients)->first();
        $total_revenue = Transaction::select(DB::raw('sum(amount - discount_price) as total'))->first();

        //return response()->json($total_revenue);
        $referred_clients_count = AffiliateLink::where('affiliate_from',session('client_id'))->count();

        $total_clients = Client::count();

        $admin_user = Admin::count();

        $api_integration = ApiIntegration::all();

        $dhl_count = ApiIntegration::where('platform','dhl')->count();
        $dpd_count = ApiIntegration::where('platform','dpd')->count();
        $ups_count = ApiIntegration::where('platform','ups')->count();
        $amazon_count = ApiIntegration::where('platform','amazon')->count();
        $ebay_count = ApiIntegration::where('platform','ebay')->count();
        $shopify_count = ApiIntegration::where('platform','shopify')->count();


        $client_info = Client::where('id',session('client_id'))->join('variants','variants.variant_id','clients.account_type')->first();
        return view('client.settings.api')->with('client_info',$client_info)->with('api_integration',$api_integration)
                                         ->with('dhl_count',$dhl_count)->with('dpd_count',$dpd_count)
                                         ->with('total_revenue',$total_revenue)->with('referred_clients_count',$referred_clients_count)
                                         ->with('total_clients',$total_clients)->with('ups_count',$ups_count)
                                         ->with('amazon_count',$amazon_count)->with('ebay_count',$ebay_count)
                                         ->with('shopify_count',$shopify_count)->with('admin_user',$admin_user);
    }

    public function referral()
    {
        $referred_clients = AffiliateLink::where('affiliate_from',session('client_id'))->pluck('affiliate_to');
        $total_revenue = Transaction::select(DB::raw('sum(amount - discount_price) as total'))->where('client_id',session('client_id'))->first();

        //return response()->json($total_revenue);
        $referred_clients_count = AffiliateLink::where('affiliate_from',session('client_id'))->count();

        $total_clients = Client::count();

        $client_info = Client::where('id',session('client_id'))->join('variants','variants.variant_id','clients.account_type')->first();

        $affiliated_at = AffiliateLink::where('affiliate_from',session('client_id'))->join('clients','clients.id','affiliate_link.affiliate_from')->get();

        $total_clients = Client::count();
        return view('client.settings.referral')->with('client_info',$client_info)
                                               ->with('referred_clients',$referred_clients)->with('affiliated_at',$affiliated_at)
                                               ->with('total_revenue',$total_revenue)->with('referred_clients_count',$referred_clients_count)
                                               ->with('total_clients',$total_clients);
    }
}
