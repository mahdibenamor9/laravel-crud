<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProviderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StockController;
use App\Http\Controllers\UserController;

// Redirects to the Stock Resource Controller
Route::get('/', function () {
    return redirect('/stocks');
});
Route::get('/providers', function () {
    return redirect('/providers');
});
Route::get('/products', function () {
    return redirect('/products');
});

Route::resource('stocks', StockController::class);
Route::resource('products', ProductController::class);
Route::resource('providers', ProviderController::class);
Route::resource('users', UserController::class);


