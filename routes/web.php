<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::get('/logout', function () {
	Session::forget('user');
    return redirect('/login');
});



Route::view('/login','login');

Route::post('/login',[UserController::class,'login']);
Route::get('/product',[ProductController::class,'index']);
Route::get('/productdetails/{id}',[ProductController::class,'productdetails']);
Route::get('/search',[ProductController::class,'search']);

Route::post('/addtocart',[ProductController::class,'addtocart']);
Route::get('/cartlist',[ProductController::class,'cartlist']);
Route::post('/removecart',[ProductController::class,'removecart']);

