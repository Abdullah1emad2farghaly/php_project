<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\OrdersController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;



// Login routes for admin (guest only)
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});

Route::middleware(['auth', 'IsAdmin'])->group(function () {

    // Dashboard
    Route::controller(MainController::class)->group(function () {
        Route::get('/', 'index')->name('index');           // /admin -> admin.index
        Route::get('/customers', 'customers')->name('customers'); // /admin/customers
    });

    // Products
    Route::controller(ProductController::class)->prefix('products')->name('products.')->group(function () {
            Route::get('/', 'index')->name('index');       // admin.products.index
            Route::get('/create', 'create')->name('create');
            Route::post('/', 'store')->name('store');
            Route::get('/{id}', 'show')->name('show')->whereNumber('id');
            Route::get('/edit/{id}','edit')->name('edit')->whereNumber('id');
            Route::PUT('/update/{id}','update')->name('update')->whereNumber('id');
            Route::DELETE('/{id}','destroy')->name('destroy')->whereNumber('id');
        });

    // Categories
    Route::controller(CategoryController::class)->prefix('categories')
        ->name('categories.')
        ->group(function () {
            Route::get('/', 'index')->name('index');       // admin.categories.index
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::delete('/{id}','destroy')->name('destroy')->whereNumber('id');
        });

    // Orders
    Route::controller(OrdersController::class)->prefix('orders')->name('orders.')->group(function () {
            Route::get('/', 'index')->name('index');       // admin.orders.index
            Route::get('/{id}', 'show')->name('show')->whereNumber('id');
        });

    // Logout
    Route::post('/logout', function () {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect()->route('website.login.form');
    })->name('logout');
});
