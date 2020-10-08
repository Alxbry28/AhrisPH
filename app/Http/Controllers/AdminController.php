<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use DB;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('role:superadministrator|administrator');
    }

    public function logout() {
        Auth::logout();
        return redirect('/');  
    }

    public function index()
    {

        // $users =  DB::select('SELECT count(*) FROM role_user WHERE role_id=3');
        $users = DB::table('role_user')->where('role_id', 3)->get()->count();
        //  $users = User::all();
        // return view('admin.index')->with('users', $users);
        return view('admin-dashboard.home')->with('users',$users);
    }

    public function register()
    {
       return view('admin-dashboard.register');
    }
    public function adminDashboard() {
       return view('admin-dashboard.home');
   }

   //ar-admin Profile
   public function adminProfile() {
       return view('admin-dashboard.ar-admin-profile');
   }

   //ar-analytics
   public function adminAnalytics() {
       return view('admin-dashboard.ar-analytics');
   }

   //ar-crashlogs Report
   public function adminCrashLogs() {
       return view('admin-dashboard.ar-crashlogs-report');
   }

   //ar-transaction Overview
   public function adminOverview() {
       return view('admin-dashboard.ar-transaction-overview');
   }

   //ar-user Authentication
   public function adminUserAuth() {
       return view('admin-dashboard.ar-user-authentication');
   }

   //ar-user User Control
   public function adminUserControl() {
       return view('admin-dashboard.ar-user-control');
   }

   //ar-web Monitoring
   public function adminMonitoring() {
       return view('admin-dashboard.ar-web-monitoring');
   }

   // ar-web Updates
   public function adminWebUpdates() {
       return view('admin-dashboard.ar-web-updates');
   }
}
