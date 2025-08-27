<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Frontend\FrontendController;

//Route::get('/', function () {
//    return view('frontend.home.home');
//});

Route::get('/',[FrontendController::class,'index'])->name('home');
Route::get('login',[FrontendController::class,'login'])->name('login');
Route::get('register',[FrontendController::class,'register'])->name('register');
Route::get('/category/{slug}',[FrontendController::class,'category'])->name('category');

Route::resource('category', CategoryController::class);
Route::resource('post',PostController::class);
