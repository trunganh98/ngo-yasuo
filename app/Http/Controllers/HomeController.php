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
}
