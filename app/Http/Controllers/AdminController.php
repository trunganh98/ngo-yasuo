<?php

namespace App\Http\Controllers;

use App\ngo_admin;
use Illuminate\Routing\Controller as BaseController;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class AdminController extends Controller
{
    //
    public function showDashboard(){
        return view('admin.index');
    }
    public function showLogin(){
        return view('admin.login');
    }
    public function register(){
        return view('admin.registration');
    }
    public function login(Request $request){
       $admin_email = $request->admin_email;
       $admin_password = $request->admin_password;
       $result = ngo_admin::where('email',$admin_email)->where('password',$admin_password)->first();
       //$result = DB::table('ngo_admin')->where('admin_email',$admin_email)->where('password', $admin_password)->first();
       if(!$result){
           Session::put('message',' Invalid login or password. Please try again. !!!');
           return Redirect::to('admin/login');
       }
       else{
           Session::put('admin_name', $result->lastname);
           Session::put('admin_id', $result->admin_id);
           return Redirect::to('admin');
       }

    }
    public function logOut(){
        Session::put('admin_name', null);
        Session::put('admin_id', null);
        return Redirect::to('admin/login');
    }


}
