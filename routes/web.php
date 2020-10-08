<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
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

Route::get('/', 'HomeController@index');

Route::get('/blogs', function () {
    return view('blogs');
});
Auth::routes(['verify' => true]);
// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user', 'UserController@index')->name('user');
Route::get('/user/settings', 'UserController@userSettings')->name('user');
Route::get('/user/personal-settings', 'UserController@userPersonalSettings')->name('user');
Route::get('/user/company', 'UserController@companyDashboard')->name('user');
Route::get('/user/company/organization-settings', 'UserController@companyOrganizationSettings')->name('user');
Route::get('/user/company/charts-of-accounts', 'UserController@companyChartsOfAccounts')->name('user');
Route::get('/user/company/record-customer', 'UserController@companyRecordCustomer')->name('user');
Route::get('/user/company/record-product-services', 'UserController@companyRecordProductServices')->name('user');
Route::get('/user/company/record-suppliers', 'UserController@companyRecordSuppliers')->name('user');
Route::get('/user/company/tax-rate', 'UserController@companyTaxRate')->name('user');
Route::get('/user/company/record-users', 'UserController@companyRecordUsers')->name('user');
Route::get('/user/update/profile', 'UserController@update')->name('user');
Route::get('/logout', 'UserController@logout')->name('user');
// Route::get('/logout', 'UserController@companyRecordProductServices')->name('user');




//Admin Routes
Route::get('/admin/home', 'AdminController@index')->name('admin');
Route::get('/admin/logout', 'AdminController@logout')->name('admin');
Route::get('/admin-dashboard/home',  [AdminController::class,'adminDashboard'])->name('admin');
Route::get('/admin/ar-admin-profile', [AdminController::class,'adminProfile'])->name('admin');
Route::get('/admin/ar-analytics', [AdminController::class,'adminAnalytics'])->name('admin');
Route::get('/admin/ar-crashlogs-report', [AdminController::class,'adminCrashLogs'])->name('admin');
Route::get('/admin/ar-transaction-overview', [AdminController::class,'adminOverview'])->name('admin');
Route::get('/admin/ar-user-authentication', [AdminController::class,'adminUserAuth'])->name('admin');
Route::get('/admin/ar-user-control', [AdminController::class,'adminUserControl'])->name('admin');
Route::get('/admin/ar-web-monitoring', [AdminController::class,'adminMonitoring'])->name('admin');
Route::get('/admin/ar-web-updates', [AdminController::class,'adminWebUpdates'])->name('admin');
// Route::get('/testlogin', function () {
//     return view('login-sample');
// });

// Auth::routes();

// Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
//     Route::resource('/users', 'UsersController', ['except' => ['show','create','store']]);
// });
