<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/catalogue/trail', [HomeController::class, 'show'])->name('showHome');
Route::get('/cart', [CartController::class, 'show'])->name('showCart');

Route::get('/catalogue/trail', function () {
    return view('products-list');
});

Route::get('/product-detail', function () {
    return view('product-detail');
});
