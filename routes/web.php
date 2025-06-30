<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ValidateController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Middleware\EnsureTokenIsValid;
use App\Livewire;

Route::get('/', [HomeController::class,'getView'])->name('homeView');
Route::get('/download/view', [ValidateController::class,'getView'])->name('validateView');
Route::get('/login',Login::class)->name('login');


//Route::get('/admin', [AdminController::class,'getView'])->name('adminView')->middleware(EnsureTokenIsValid::class);
Route::get('/admin', [AdminController::class,'getView'])->name('adminView')->middleware('auth');
