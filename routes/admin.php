<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\OrdersController;
use Illuminate\Support\Facades\Route;

Route::controller(AuthController::class)->group(function () {
Route::get('/login','showLoginForm')->name('login.form');
Route::post('/login','login')->name('login');
Route::post('/logout','logout')->name('logout');
});

Route::middleware('admin')->group(function () {

    Route::controller(MainController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/customers','customers')->name('customers');
    });

    Route::controller(ProductController::class)->prefix('/products')->name('products.')->group(function(){
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{id}', 'show')->name('show')->whereNumber('id');
    });

    Route::controller(CategoryController::class)->prefix('/categories')->name('categories.')->group(function(){
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
    });

    Route::controller(OrdersController::class)->prefix('orders')->name('orders.')->group(function(){    
        Route::get('/', 'index')->name('index');
        Route::get('/{id}','show')->name('show')->whereNumber('id');
    });

});
