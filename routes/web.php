<?php


use App\Http\Controllers\website\HomeController;
use Illuminate\Support\Facades\Route;


Route::controller(HomeController::class)->name('website.')->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('/about', 'about')->name('about');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/signup', 'signup')->name('signup');
    Route::get('/login', 'login')->name('login');
});

    Route::get('/logout',function(){
        return 'logout';
    })->name('logout');
