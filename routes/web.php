<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ValidateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;

//Homepage
Route::get('/', [HomeController::class,'getView'])->name('homeView');
//Request validator page
Route::get('/validate', [ValidateController::class,'getView'])->name('validateView');
//Login page
Route::get('/login', [LoginController::class,'getView'])->name('login');
//Admin page, guarded by a middleware
Route::get('/admin', [adminController::class,'getView'])->name('adminView')->middleware('auth');
