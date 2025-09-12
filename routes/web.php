<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\MainController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\website\HomeController;
use Illuminate\Support\Facades\Route;


Route::prefix('/admin')->name('admin.')->group(function(){
    Route::get('/', [MainController::class,'index'])->name('index');

    Route::controller(ProductController::class)->prefix('/products')->name('products.')->group(function(){
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/', 'store')->name('store');
        Route::get('/{id}', 'show')->name('show')->whereNumber('id');
    });

    // Route::controller([CategoryController::class])->prefix('/categories')->name('categories.')->group(function(){
    //     Route::get('/', 'index')->name('index');
    //     Route::get('/create', 'create')->name('create');
    // });
});

Route::prefix('/')->name('website.')->group(function(){
    Route::get('/', [HomeController::class,'index'])->name('index');
});
