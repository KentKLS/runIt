<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BackOfficeController;
use App\Http\Controllers\BackOfficeCategoryController;
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

Route::get('/', [HomeController::class, 'show'])->name('showHome');
Route::get('/cart/{id}', [CartController::class, 'show'])->name('showCart');
Route::get('/catalogue/trail', [ProductController::class, 'show'])->name('showCatalogueTrail');
Route::get('/product/{id}', [ProductController::class, 'detail'])->name('showProductDetail');
Route::get('/contact', [ContactController::class, 'show'])->name('showContact');

Route::get('/backoffice/home', [BackOfficeController::class, 'index'])->name('home.backoffice');;
Route::get('/backoffice/product', [BackOfficeController::class, 'showCreate'])->name('show.create');;
Route::post('/addProduct', [BackOfficeController::class, 'create'])->name('redirect.create');;
Route::get('/backoffice/product/{product}/edit', [BackOfficeController::class, 'showUpdate'])->name('show.update');;
Route::put('/updateProduct/{product}', [BackOfficeController::class, 'update'])->name('redirect.update');;
Route::delete('/deleteProduct/{product}', [BackOfficeController::class, 'destroy'])->name('product.destroy');;

Route::get('/backoffice/home-category', [BackOfficeCategoryController::class, 'index'])->name('home.backoffice.category');;
Route::get('/backoffice/category', [BackOfficeCategoryController::class, 'showCreate'])->name('show.create.category');;
Route::post('/addCategory', [BackOfficeCategoryController::class, 'create'])->name('redirect.create.category');;
Route::get('/backoffice/category/{category}/edit', [BackOfficeCategoryController::class, 'showUpdate'])->name('show.update.category');;
Route::put('/updateProduct/{category}', [BackOfficeCategoryController::class, 'update'])->name('redirect.update.category');;
Route::delete('/deleteProduct/{category}', [BackOfficeCategoryController::class, 'destroy'])->name('product.destroy.category');;

