<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProviderController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StockController;


// Redirects to the Stock Resource Controller
Route::get('/', function () {
    return redirect('/stocks');
});

Route::resource('stocks', StockController::class);
Route::resource('products', ProductController::class);
Route::resource('providers', ProviderController::class);
