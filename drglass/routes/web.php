<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BranchController;
use App\Http\Controllers\BouquetsController;
use App\Http\Controllers\BouquetsPointsController;
use App\Http\Controllers\ClientsController;
use App\Http\Controllers\SubscriptionsController;
use App\Http\Controllers\CitiesController;
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

Auth::routes(['verify' => true]);
Route::get('/', function () {
    return view('welcome');
});

Route::resource('students', StudentController::class);
Route::resource('branchs', BranchController::class);
Route::resource('bouquets', BouquetsController::class);
Route::resource('bouquets_points', BouquetsPointsController::class);
Route::resource('clients', ClientsController::class);
Route::resource('cities', CitiesController::class);

//Route::resource('email', App\Http\Controllers\Auth\ResetPasswordController::class);

Route::resource('home', 'App\Http\Controllers\HomeController', ['except' => ['create', 'edit']]);

Route::resource('admindashboard', 'App\Http\Controllers\AdminDashboardController', ['except' => ['create', 'edit']]);


Route::resource('appointments', 'App\Http\Controllers\AppointmentsController', ['except' => ['create', 'edit']]);
Route::resource('appointmentsupdatedsuccess', 'App\Http\Controllers\AppointmentsUpdatedSuccessController', ['except' => ['create', 'edit']]);

Route::resource('subscriptions_insert', 'App\Http\Controllers\SubscriptionsInsertController', ['except' => ['create', 'edit']]);
Route::resource('managesubscriptions', 'App\Http\Controllers\ManagesubScriptionsController', ['except' => ['create', 'edit']]);
Route::resource('managesubscriptionsedit', 'App\Http\Controllers\ManagesubScriptionsEditController', ['except' => ['create', 'edit']]);
Route::resource('managesubscriptionsview', 'App\Http\Controllers\ManagesubScriptionsViewController', ['except' => ['create', 'edit']]);
Route::resource('managesubscriptionsdelete', 'App\Http\Controllers\ManagesubScriptionsDeleteController', ['except' => ['create', 'edit']]);

Route::resource('users', 'App\Http\Controllers\UsersController', ['except' => ['create', 'edit']]);
Route::resource('useredit', 'App\Http\Controllers\UserEditController', ['except' => ['create', 'edit']]);
Route::resource('useredited', 'App\Http\Controllers\UserEditedController', ['except' => ['create', 'edit']]);
Route::resource('userview', 'App\Http\Controllers\UserViewController', ['except' => ['create', 'edit']]);
Route::resource('usereditadmin', 'App\Http\Controllers\UserEditAdminController', ['except' => ['create', 'edit']]);

Route::resource('companies', 'App\Http\Controllers\CompaniesController', ['except' => ['create', 'edit']]);
Route::resource('companyview', 'App\Http\Controllers\CompanyViewController', ['except' => ['create', 'edit']]);
Route::resource('companyeditadmin', 'App\Http\Controllers\CompanyEditAdminController', ['except' => ['create', 'edit']]);


Route::resource('payment_method', 'App\Http\Controllers\PaymentMethodController', ['except' => ['create', 'edit']]);


Route::resource('sub_appointments', 'App\Http\Controllers\sub_appointmentsController', ['except' => ['create', 'edit']]);


Route::resource('header_home', 'App\Http\Controllers\HeaderHomeController', ['except' => ['create', 'edit']]);

Route::resource('subscriptions', 'App\Http\Controllers\SubscriptionsController', ['except' => ['create', 'edit']]);
Route::resource('subscriptions_success', 'App\Http\Controllers\subscriptions_successController', ['except' => ['create', 'edit']]);
Route::resource('subscriptions_home', 'App\Http\Controllers\subscriptions_homeController', ['except' => ['create', 'edit']]);


Route::resource('usereditpassword', 'App\Http\Controllers\UserEditPasswordController', ['except' => ['create', 'edit']]);
Route::resource('userpasswordchanged', 'App\Http\Controllers\UserPasswordChangedController', ['except' => ['create', 'edit']]);




Route::resource('branchss', 'App\Http\Controllers\BranchssController', ['except' => ['create', 'edit']]);
Route::resource('brancheditadmin', 'App\Http\Controllers\BranchEditAdminController', ['except' => ['create', 'edit']]);
Route::resource('branchview', 'App\Http\Controllers\BranchViewController', ['except' => ['create', 'edit']]);



Route::resource('subscriptionschoosetime', 'App\Http\Controllers\SubscriptionsChooseTimeController', ['except' => ['create', 'edit']]);


Route::resource('addnewpaymentmethod', 'App\Http\Controllers\AddnewPaymentMethodController', ['except' => ['create', 'edit']]);
Route::resource('paymentmethodedit', 'App\Http\Controllers\PaymentMethodEditController', ['except' => ['create', 'edit']]);



Route::resource('showcalender', 'App\Http\Controllers\ShowCalenderController', ['except' => ['create', 'edit']]);

Route::resource('publicwebcontents', 'App\Http\Controllers\PublicWebContentsController', ['except' => ['create', 'edit']]);
