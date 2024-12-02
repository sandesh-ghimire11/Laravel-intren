<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
Route::get('/', function () {
    return view('welcomelaravel');

});
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products',[ProductController::class,'store'])->name('products.store');


