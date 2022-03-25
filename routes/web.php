<?php

use App\Models\Provider;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StockController;
use App\Http\Controllers\ProviderController;


// Redirects to the Stock Resource Controller
Route::get('/', function () {
    return redirect('/stocks');
});
Route::get('/providers', function () {
    return redirect('/providers');
});

Route::resource('stocks', StockController::class);
Route::resource('providers', ProviderController::class);
