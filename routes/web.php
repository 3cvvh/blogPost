<?php

use App\Http\Controllers\blogController;
use App\Http\Controllers\blogdashController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\dashboardpostsController;
use App\Http\Controllers\dashposts;
use App\Http\Controllers\homeController;
use App\Http\Controllers\kontakController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\signController as sign;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\signController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/',[homeController::class,'index']);
Route::get('/post',[blogController::class,'index']);
Route::get('/cont',[kontakController::class,'index']);
Route::get('/single/{blog:slug}',[blogController::class,'single']);
Route::get('/author/{user:email}',[blogController::class,'authorpos']);
Route::get('/cate_blog/{category:slug}',[CategoryController::class,'byposts']);
Route::get('/login',[loginController::class,'index'])->name('login')->middleware('guest');
Route::get('/sign',[sign::class,'index']);
Route::post('/sign',[sign::class,'store']);
Route::post('/login',[loginController::class,'store']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('auth');
Route::post('/logout',[loginController::class,'logout'])->name('logout');
Route::resource('/dashboard/blogs', blogdashController::class)->middleware('auth');