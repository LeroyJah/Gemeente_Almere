<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\DonationController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/download/view', [DownloadController::class,'getView'])->name('downloadView');
Route::get('/transcribe/view', [DonationController::class,'getView'])->name('donationsView');

