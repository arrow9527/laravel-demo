<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});
//==== DEMO ====
Route::prefix('api')->group(function () {
    Route::get('products', [ProductController::class, 'index']);
    Route::get('product', [ProductController::class, 'index']);
    Route::get('/product/{id}', [ProductController::class, 'show'])
            ->where('id', '[0-9]+');
});

