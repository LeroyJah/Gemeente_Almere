<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ValidateController;
use App\Http\Controllers\DonationController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/download/view', [ValidateController::class,'getView'])->name('validateView');
Route::get('/transcribe/view', [DonationController::class,'getView'])->name('donationsView');
