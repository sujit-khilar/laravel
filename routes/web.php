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

Route::get('about',[UserController::class,'aboutUser']);

Route::get('user/{name}',[UserController::class,'getUserName']);

Route::get('user',[UserController::class,'adminLogin']);