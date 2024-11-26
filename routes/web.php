<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route:: get('/home',function(){
    return view('home');
});

// route::view('/home','home');

// Route::redirect('/home','/');


Route::get('/about/{name}',function($name){
    return view('about',['name'=>$name]);
});

Route::get('user',[UserController::class,'getUser']);

Route::get('user-about/{name}',[UserController::class,'aboutUser']);

Route::get('user/{name}',[UserController::class,'getUserName']);

Route::get('admin-login',[UserController::class,'adminLogin']);

Route::view('/home2','home2');

Route::get('user-home',[UserController::class,'userHome']);