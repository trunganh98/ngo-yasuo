<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view('pages.home');
    }
    public function login(){
        return view('pages.login_user');
    }
    public function register(){
        return view('pages.registration');
    }
}
