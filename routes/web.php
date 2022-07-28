<?php

use App\Http\Controllers\Admin\ApiIntegrationController;
use App\Http\Controllers\Admin\ChangeLogController;
use App\Http\Controllers\Admin\ClientCardController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\CreateAdminController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ForgetPasswordController;
use App\Http\Controllers\Admin\LocalizationController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\ShippingController;
use App\Http\Controllers\Admin\SupportController;
use App\Http\Controllers\Admin\TaskController;
use App\Http\Controllers\Client\ChangeLogController as ClientChangeLogController;
use App\Http\Controllers\Client\LoginController as ClientLoginController;
use App\Http\Controllers\Client\NewsController as CLientNewsController;
use App\Http\Controllers\Client\UserController;
use App\Http\Controllers\Client\RegisterController;
use App\Http\Controllers\Client\SettingController as ClientSettingController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('client/upgrade_plan','admin.client.upgrade_plan')->name('upgrade_plan');
// Route::view('help/overview','admin.help.overview')->name('help.overview');
// Route::view('help/list','admin.help.list')->name('help.list');
// Route::view('help/faq','admin.help.faq')->name('help.faq');
// Route::view('help/contact','admin.help.contact')->name('help.contact');

Route::get('help/overview',[SupportController::class , 'overview'])->name('help.overview');
Route::get('help/list',[SupportController::class , 'list'])->name('help.list');
Route::get('help/faq',[SupportController::class , 'faq'])->name('help.faq');
Route::get('help/contact',[SupportController::class , 'contactView'])->name('help.contact');

Route::post('help/contact/form',[SupportController::class , 'contactFromSubmit'])->name('help.contactform');


Route::get('/', function () {
    return view('admin.login');
});

// if ( file_exists( app_path( 'Http/Controllers/Admin/LocalizationController.php') ) )
// {

// }
Route::get('lang/{locale}', [LocalizationController::class , 'lang'] );


/*
||***********************************************************************
|     ******************   Admin Routes    ******************
||***********************************************************************
*/

Route::group(['prefix' => 'admin'], function (){

Route::get('login',[LoginController::class , 'login'])->name('admin.login');
Route::post('login/check',[LoginController::class , 'checkLogin'])->name('admin.login.check');
Route::get('logout',[LoginController::class , 'logout'])->name('admin.logout');

//+++++ check two step ++++++++
Route::get('check/verification/code/{admin_id}/{email}',[LoginController::class , 'checkOTP'])->name('admin.check.verification.code');
Route::get('client/updateproduct',[ClientController::class , 'changeProductPrices'])->name('client.update.product');

});


Route::get('forget-password', [ForgetPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgetPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}', [ForgetPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgetPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');


Route::group(['prefix' => 'admin', 'middleware' => ['admin']], function (){



/*
|*******************
| Dashboard Routes
|*******************
*/
Route::get('dashboard',[DashboardController::class , 'dashboard'])->name('admin.dashboard');

/*
|******************************
| Dashboard CostOverview Routes
|******************************
*/
Route::get('cost-overview/store',[DashboardController::class , 'storeCostOverview'])->name('admin.costoverview.store');
Route::get('cost-overview/update/{product_id}/{price_id?}',[DashboardController::class , 'updateCostOverview'])->name('admin.costoverview.update');
Route::get('cost-overview/delete/{id}',[DashboardController::class , 'deleteCostOverview'])->name('admin.costoverview.delete');


/*
|**********************************
| Dashboard Shipping Detail Routes
|*********************************
*/
Route::post('shipping-detail/store',[ShippingController::class , 'store'])->name('admin.shipping_detail.store');
Route::post('shipping-detail/update/{id}',[ShippingController::class , 'update'])->name('admin.shipping_detail.update');
Route::get('shipping-detail/delete/{id}',[ShippingController::class , 'destroy'])->name('admin.shipping_detail.delete');


Route::post('shipping-package/store',[ShippingController::class , 'storePackageFee'])->name('admin.shipping_package.store');
Route::post('shipping-package/update/{fee_id}',[ShippingController::class , 'updatePackageFee'])->name('admin.shipping_package.update');

/*
|******************************
| Dashboard Discount Code Routes
|******************************
*/
Route::post('discount-codes/store',[DashboardController::class , 'storeDiscountCode'])->name('admin.discount_code.store');
Route::post('discount-codes/update/{id}',[DashboardController::class , 'updateDiscountCode'])->name('admin.discount_code.update');
Route::get('discount-codes/delete/{id}',[DashboardController::class , 'deleteDiscountCode'])->name('admin.discount_code.delete');

/*
|*************************************
| Dashboard Affiliate Program Routes
|************************************
*/
Route::post('affiliateprogram/update/{id}',[DashboardController::class , 'addAffiliateProgram'])->name('admin.affiliateprogram.update');


/*
|******************************
| Admin Card Detail Code Routes
|******************************
*/
Route::post('card-detail/store/{id}',[ClientCardController::class , 'store'])->name('admin.card-detail.store');
Route::post('card-detail/update/{id}/{client_id}',[ClientCardController::class , 'update'])->name('admin.card-detail.update');
Route::get('card-detail/delete/{id}',[ClientCardController::class , 'destroy'])->name('admin.card-detail.delete');


/*
|******************************
| Admin profile Forget Password
|******************************
*/
Route::get('forget/password/link/{email}',[ProfileController::class , 'forgetPassword'])->name('admin.forget.password.link');
Route::get('setup2FA',[ProfileController::class , 'setUp2FA'])->name('admin.setup2fa');
Route::get('deactivate2FA/{email}',[ProfileController::class , 'deActivateUp2FA'])->name('admin.deactivate2fa');

/*
|**************************
| Admin CreateAdmin Routes
|**************************
*/
Route::get('/index',[CreateAdminController::class , 'index'])->name('admin.admins');
Route::post('/store',[CreateAdminController::class , 'store'])->name('admin.store');
Route::get('/delete/{id}',[CreateAdminController::class , 'destroy'])->name('admin.delete');
Route::get('/changeStatus/{status}',[CreateAdminController::class , 'changeStatus'])->name('admin.change.status');



/*
|****************
| Client Routes
|****************
*/
Route::get('clients',[ClientController::class , 'index'])->name('admin.clients');
Route::get('client/view/{id}/{stripe_id}',[ClientController::class , 'show'])->name('admin.client.view');
Route::post('client/update/{id}',[ClientController::class , 'update'])->name('admin.client.update');
Route::get('client/destroy/{id}',[ClientController::class , 'destroy'])->name('admin.client.delete');
Route::post('client/update/variant/{client_id}',[ClientController::class , 'updateVariant'])->name('client.update.variant');
Route::post('client/cancel/subscription/{client_id}',[ClientController::class , 'cancelSubscription'])->name('client.cancel.subscription');
Route::get('client/invoice/{stripe_id}',[ClientController::class , 'invoiceView'])->name('client.view.invoice');
Route::get('client/invoice/print/{stripe_id}',[ClientController::class , 'invoicePrint'])->name('client.print.invoice');
Route::get('download/invoice/{id}',[ClientController::class , 'downloadInvoice'])->name('client.invoice.download');



// ====== update shipping quantity client
Route::get('client/shiping-quantity/update/{id}',[ClientController::class , 'updateShippingQuantity'])->name('client.update.shipping_quantity');



/*
|**********************
| Admin Profile Routes
|**********************
*/
Route::get('profile/{id}',[ProfileController::class , 'profileView'])->name('admin.profile');
Route::post('/update/profile/{id}',[ProfileController::class , 'updateProfile'])->name('admin.profile.update');

/*
|*******************************
| Admin Profile Password Update
|*******************************
*/
Route::post('/update/password/{id}',[ProfileController::class , 'updatePassword'])->name('admin.update.password');
Route::post('/update/email/{id}',[ProfileController::class , 'updateEmail'])->name('admin.update.email');
Route::get('change/theme/dark', [ProfileController::class , 'changeThemeToDark'])->name('change.theme.dark');
Route::get('change/theme/light', [ProfileController::class , 'changeThemeToLight'])->name('change.theme.light');



/*
|**********************
| Admin Task Routes
|**********************
*/
Route::post('task/store/{id}',[TaskController::class , 'store'])->name('client.admin.storetask');
Route::post('task/update/{task_id}',[TaskController::class , 'update'])->name('client.admin.updatetask');
Route::get('task/update/status',[TaskController::class , 'updateStatus'])->name('client.admin.updatestatus');
Route::get('task/delete/{task_id}',[TaskController::class , 'destroy'])->name('client.admin.deletetask');
Route::get('tasks/{task_id}',[ProfileController::class , 'adminTask'])->name('admin.tasks');


/*
|**********************
| Admin Setting Routes
|**********************
*/
Route::get('settings',[SettingController::class , 'setting'])->name('admin.settings');
Route::post('settings/update',[SettingController::class , 'updateInfo'])->name('admin.settings.update');
Route::get('overview',[SettingController::class , 'overview'])->name('admin.overview');
Route::get('api-integration',[SettingController::class , 'api'])->name('admin.api');
Route::get('referral',[SettingController::class , 'referral'])->name('admin.referral');


Route::post('api-integration/store',[ApiIntegrationController::class , 'store'])->name('admin.api-integration.store');
Route::post('api-integration/update/{id}',[ApiIntegrationController::class , 'update'])->name('admin.api-integration.update');
Route::get('api-integration/destroy/{id}',[ApiIntegrationController::class , 'destroy'])->name('admin.api-integration.destroy');


/*
|******************************
|     Admin News Routes
|******************************
*/
Route::get('news',[NewsController::class , 'index'])->name('admin.news');
Route::post('news/store',[NewsController::class , 'store'])->name('admin.news.store');
Route::post('news/update/{id}',[NewsController::class , 'update'])->name('admin.news.update');
Route::get('news/delete/{id}',[NewsController::class , 'destroy'])->name('admin.news.delete');

/*
|******************************
|     Admin ChangeLog Routes
|******************************
*/
Route::get('change-log',[ChangeLogController::class , 'index'])->name('admin.changelog');
Route::post('change-log/store',[ChangeLogController::class , 'store'])->name('admin.changelog.store');
Route::post('change-log/update/{id}',[ChangeLogController::class , 'update'])->name('admin.changelog.update');
Route::get('change-log/delete/{id}',[ChangeLogController::class , 'destroy'])->name('admin.changelog.delete');

// Route::view('admin/courses','admin.courses')->name('admin.courses');

Route::get('courses',[CourseController::class , 'courses'])->name('admin.courses');
});


/*
||***********************************************************************
|     ******************   CLient Routes    ******************
||***********************************************************************
*/

Route::get('client/check-discount',[RegisterController::class , 'checkDiscountCode'])->name('client.check.discount');

Route::view('client/create/shipment', 'client.shipping.create_shipment');

Route::group(['prefix' => 'client'], function (){

Route::get('register/{is_affiliate?}',[RegisterController::class , 'register'])->name('client.register');
Route::post('register/store',[RegisterController::class , 'registerClient'])->name('client.register.store');

Route::get('login',[ClientLoginController::class , 'login'])->name('client.login');
Route::post('login/check',[ClientLoginController::class , 'checkLogin'])->name('client.login.check');
Route::get('logout',[ClientLoginController::class , 'logout'])->name('client.logout');

/*
|*******************
| Password  Routes
|*******************
*/
Route::get('create/password',[RegisterController::class , 'createPasswordForm'])->name('client.create.password');
Route::post('password/store',[RegisterController::class , 'storePassword'])->name('client.store.password');


/*
|****************
| Dashboard
|****************
*/
Route::get('dashboard',[ClientLoginController::class , 'dashboard'])->name('client.dashboard');


/*
|****************
| User Routes
|****************
*/
Route::get('users',[UserController::class , 'index'])->name('client.users');
Route::post('user/store',[UserController::class , 'store'])->name('client.user.store');
Route::post('user/update/{id}',[UserController::class , 'update'])->name('client.user.update');
Route::get('user/destroy/{id}',[UserController::class , 'destroy'])->name('client.user.delete');

/*
|******************************
|     CLient News Routes
|******************************
*/
Route::get('news',[CLientNewsController::class , 'index'])->name('client.news');

/*
|******************************
|     CLient ChangeLog Routes
|******************************
*/
Route::get('change-log',[ClientChangeLogController::class , 'index'])->name('client.changelog');

/*
|**********************
| Client Setting Routes
|**********************
*/

Route::get('settings',[ClientSettingController::class , 'setting'])->name('client.settings');
Route::post('settings/update-info',[ClientSettingController::class , 'updateInfo'])->name('client.settings.update');
Route::get('overview',[ClientSettingController::class , 'overview'])->name('client.overview');
Route::get('api-integration',[ClientSettingController::class , 'api'])->name('client.api');
Route::get('referral',[ClientSettingController::class , 'referral'])->name('client.referral');

});



Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return 'Routes cache cleared';
});
Route::get('/config-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return 'Config cache cleared';
});
Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    return 'Application cache cleared';
});
Route::get('/view-clear', function() {
    $exitCode = Artisan::call('view:clear');
    return 'View cache cleared';
});
