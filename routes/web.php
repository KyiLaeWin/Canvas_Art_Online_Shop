<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\MainBlogController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/funiy',[CustomerController::class,'index']);
Route::get('/product',[CustomerController::class,'product']);
Route::get('/blog',[CustomerController::class,'blog']);
Route::get('/about',[CustomerController::class,'about']);
Route::get('/contact',[CustomerController::class,'contact']);
Route::get('/blog/{id}',[CustomerController::class,'single']);

Route::resource('main',MainController::class);
Route::resource('mainblog',MainBlogController::class);
//Route::get('main',[Controller::class,'main']);
//Route::get('mainblog',[AdminController::class,'mainblog']);