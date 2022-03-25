<?php

use App\Models\Provider;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StockController;


// Redirects to the Stock Resource Controller
Route::get('/', function () {
    return redirect('/stocks');
});

Route::resource('stocks', StockController::class);
Route::resource('providers', Provider::class);
