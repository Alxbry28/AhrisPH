<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware(['role:user','verified']);
    }

    public function index()
    {
        $user = Auth::user();
        return view('user.index', compact('user'));
        // return view('user.index', compact('user'));
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }


    public function update(Request $request)
    {
        $id = $request->id;
        $user = User::find($id);
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->username = $request->input('username');
        $user->facebook = $request->input('facebook');
        $user->linkedin = $request->input('linkedin');
        $user->twitter = $request->input('twitter');
        $user->city = $request->input('city');
        $user->address = $request->input('address');
        $user->province = $request->input('province');
        $user->zip_code = $request->input('zip_code');
        $user->phonenumber = $request->input('phonenumber');
        $user->birthday = $request->input('birthday');
        $user->job_title = $request->input('jobtitle');
        $user->about_me = $request->input('about_me');
        $user->save();
        return redirect('/user');
    }


    public function userPersonalSettings() {
        return view('dashboard.personal-settings');
    }


    public function modalUsername() {
        return view('dashboard.modal');
    }

    public function userSales() {
        return view('dashboard.sales');
    }

    public function userPurchases() {
        return view('dashboard.purchases');
    }

    public function userAccounting() {
        return view('dashboard.accounting');
    }

    public function userReports() {
        return view('dashboard.reports');
    }

    public function userContacts() {
        return view('dashboard.contacts');
    }

    public function userTaxes() {
        return view('dashboard.taxes');
    }

    public function userSettings() {
        return view('dashboard.settings');
    }

    //  END OF USER ROUTING FUNCTIONS


    // COMPANY ROUTING FUNCTIONS

    public function companyDashboard() {
        return view('company.dashboard');
    }

    //  END OF COMPANY ROUTING FUNCTIONS

    // COMPANY-RECORDS ROUTING FUNCTIONS

    public function companyOrganizationSettings() {
        return view('company.records.organization-settings');
    }

    public function companyChartsOfAccounts() {
        return view('company.records.records-charts-of-accounts');
    }

    public function companyRecordCustomer() {
        return view('company.records.records-customer');
    }

    public function companyRecordProductServices() {
        return view('company.records.records-products-services');
    }

    public function companyRecordSuppliers() {
        return view('company.records.records-suppliers');
    }

    public function companyTaxRate() {
        return view('company.records.records-tax-rate');
    }

    public function companyRecordUsers() {
        return view('company.records.records-users');
    }


}
