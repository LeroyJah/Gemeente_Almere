<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ValidateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;

Route::get('/', [HomeController::class,'getView'])->name('homeView');
Route::get('/download/view', [ValidateController::class,'getView'])->name('validateView');
Route::get('/login', [LoginController::class,'getView'])->name('login');
Route::get('/admin', [adminController::class,'getView'])->name('adminView')->middleware('auth');
