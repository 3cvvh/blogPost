<?php

use App\Http\Controllers\blogController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\kontakController;
use Illuminate\Support\Facades\Route;

Route::get('/',[homeController::class,'index']);
Route::get('/post',[blogController::class,'index']);
Route::get('/cont',[kontakController::class,'index']);