<?php

namespace App\Http\Controllers;

class UserController extends Controller
{

    //
    public function getUser()
    {
        return view("user");
    }

    function aboutUser(){
        return "Hello this is sujit khilar";
    }

    function getUserName($name){
        // return "Hello this is ".$name;
        // echo "Hello this is ".$name;
        return view('getuser',['name'=>$name]);
    }

    function adminLogin(){
        return view('admin.login');
    }

}

