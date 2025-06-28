<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ValidateController;
//use App\Http\Controllers\DonationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

Route::get('/', [HomeController::class,'getView'])->name('homeView');
Route::get('/download/view', [ValidateController::class,'getView'])->name('validateView');
//Route::get('/transcribe/view', [DonationController::class,'getView'])->name('donationsView');
Route::get('/admin', [AdminController::class,'getView'])->name('adminView');
