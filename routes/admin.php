<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\MainController;
use App\Http\Controllers\admin\ProductController;

use Illuminate\Support\Facades\Route;



    Route::controller(MainController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/customers','customers')->name('customers');
        Route::get('/orders','orders')->name('orders');
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
        });
    Route::get('/logout',function(){
        return 'logout';
    })->name('logout');
