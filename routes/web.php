<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Website\HomeController;
use Illuminate\Support\Facades\Route;

// Pages accessible only for guests (not logged in)
Route::middleware('guest')->group(function () {
    // Sign Up
    Route::get('/signup', [AuthController::class, 'showSignupForm'])->name('website.signup.form');
    Route::post('/signup', [AuthController::class, 'signup'])->name('signup');

    // Login
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('website.login.form');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});

// Pages accessible only for authenticated users
Route::middleware('auth')->group(function () {
    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('website.logout');

    // Cart
    Route::get('/cart', [HomeController::class, 'cart'])->name('website.cart');

});

// Public pages (accessible for everyone)
Route::controller(HomeController::class)->name('website.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
});
