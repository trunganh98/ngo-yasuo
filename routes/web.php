<?php

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
//Frontend
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');


//Backend

//hiển thị trang chủ admin
Route::get('/admin', 'AdminController@showDashboard');

//web đăng nhập admin website
Route::get('/admin/login', 'AdminController@showLogin');

//đăng xuất admin web
Route::get('/logout','AdminController@logOut');

//đăng nhập vào admin web
Route::post('/admin-dashBoard', 'AdminController@login');
// Posts
Route::get('/add_post','PostController@addPost');
Route::get('/list_post','PostController@listPost');

Route::post('/save_new_post','PostController@saveNewPost');
