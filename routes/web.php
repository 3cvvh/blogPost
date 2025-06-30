<?php

use App\Http\Controllers\blogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\kontakController;
use Illuminate\Support\Facades\Route;

Route::get('/',[homeController::class,'index']);
Route::get('/post',[blogController::class,'index']);
Route::get('/cont',[kontakController::class,'index']);
Route::get('/single/{blog:slug}',[blogController::class,'single']);
Route::get('/author/{user:email}',[blogController::class,'authorpos']);
Route::get('/cate_blog/{category:slug}',[CategoryController::class,'byposts']);