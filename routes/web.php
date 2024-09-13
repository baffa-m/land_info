<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/register', [HomeController::class, 'registerOwner'])->name('register');
Route::get('/sell', [HomeController::class, 'sellLand'])->name('sell.land');
Route::get('/buy', [HomeController::class, 'buyLand'])->name('buy.land');
Route::get('/about-us', [HomeController::class, 'aboutUs'])->name('about.us');
Route::get('/contact-us', [HomeController::class, 'contactUs'])->name('contact.us');
