<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\view;

class UserController extends Controller
{

    //
    public function getUser()
    {
        return view("user");
    }

    function aboutUser($name){
        return view("about",["user"=>$name]);
    }

    function getUserName($name){
        // return "Hello this is ".$name;
        // echo "Hello this is ".$name;
        return view('getuser',['name'=>$name]);
    }

    function adminLogin(){
        if(View::exists('admin.sign')){
            return view('admin.sign');
        }
        else{
            echo 'No view found';
        }

    }

    function userHome(){
        $name = "anil";

        $users= ['anil','sam','peter'];
        return view('home',["name"=>$name,"users"=>$users]);
    }

}

