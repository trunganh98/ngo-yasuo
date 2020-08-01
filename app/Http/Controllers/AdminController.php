<?php

namespace App\Http\Controllers;

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
    public function login(Request $request){
       $admin_email = $request->admin_email;
       $admin_password = md5($request->admin_password);

       $result = DB::table('ngo_admin')->where('admin_email',$admin_email)->where('password', $admin_password)->first();
       if(!$result){
           Session::put('message',' Invalid login or password. Please try again. !!!');
           return Redirect::to('admin/login');
       }
       else{
           Session::put('admin_name', $result->admin_name);
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
