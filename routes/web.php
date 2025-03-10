<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('/');
Route::get('booking', [HomeController::class, 'booking'])->name('booking');
Route::get('/services/{slug}', [ServiceController::class, 'show'])->name('service.single');
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');