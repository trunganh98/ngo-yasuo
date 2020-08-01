<?php

namespace App\Http\Controllers;

use App\list_post;
use Illuminate\Http\Request;
use DB;
use Session;
use Illuminate\Support\Facades\Redirect;

class PostController extends Controller
{
    //
    public function addPost(){
        return view('admin.add_new_post');
    }
    public function listPost(){
        $dataListPost = list_post::all();
       $managerPost= view('admin.list_post')->with('list_post',$dataListPost);
       return view('layout.admin_layout')->with('admin.list_post',$managerPost);


    }
    public function saveNewPost(Request $request){
        $data = array();
        $data['post_title'] = $request->add_title_post;
        $data['post_content'] = $request->add_content;
//        $data['post_imageName'] = $request->imageName;
        $data['post_status']= $request->post_status;
        if($data){
            DB::table('list_post')->insert($data);
            Session::put('message', 'Add new post success!');
            return Redirect::to('add_post');

        }
        else{
            Session::put('message', 'Please fill full the information!!');
            return Redirect::to('add_post');
        }
    }
}
