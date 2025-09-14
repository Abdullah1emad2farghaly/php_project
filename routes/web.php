<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\website\HomeController;
use Illuminate\Support\Facades\Route;

Route::controller(AuthController::class)->group(function () {
    Route::get('/signup', 'showSignupForm')->name('signup.form');
    Route::post('/signup', 'signup')->name('signup');

    Route::get('/login', 'showLoginForm')->name('login.form');
    Route::post('/login', 'login')->name('login');

    Route::post('/logout', 'logout')->name('logout');
});

Route::controller(HomeController::class)->prefix('/')->name('website.')->middleware('auth')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/about', 'about')->name('about');
        Route::get('/contact', 'contact')->name('contact');
    });
