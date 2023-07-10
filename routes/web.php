<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackofficeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserHomeController;

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
Route::get('/cart', [CartController::class, 'show'])->name('showCart');


Route::get('/catalogue/trail', [ProductController::class, "showProducts"])->name('showProducts');
Route::get('/catalogue/name', [ProductController::class, "showProductsOrderedByName"]);
Route::get('/catalogue/price', [ProductController::class, "showOrderedByGrowingPrice"]);
Route::get('/product/{id}', [ProductController::class, "showProduct"]);


Route::get('/backoffice/product/add', [BackofficeController::class, "showAddProduct"])->middleware('auth','admin')->name('addProduct');
Route::post('/backoffice/product/stored', [BackofficeController::class, "addProduct"])->middleware('auth','admin')->name('addProductStored');
Route::get('/backoffice/data', [BackofficeController::class, "showSeeData"])->middleware('auth','admin')->name('showSeeData');
Route::post('/backoffice/data/get', [BackofficeController::class, "getData"])->middleware('auth','admin')->name('getData');
Route::get('/backoffice/product/delete',[BackofficeController::class, "showDeleteProduct"])->middleware('auth','admin')->name('deleteProduct');
Route::post('/backoffice/product/deleted',[BackofficeController::class, "deleteProduct"])->middleware('auth','admin')->name('productDeleted');

Route::get('/backoffice/products',[BackofficeController::class, "showProducts"])->middleware('auth','admin')->name('backofficeProducts');
Route::get('/backoffice/product/modify/{id}',[BackofficeController::class, "showProductToModify"])->middleware('auth','admin')->name('productToModify');
Route::post('/backoffice/product/{id}/modified',[BackofficeController::class, "modifyProduct"])->middleware('auth','admin')->name('productModified');







Route::get('/home', [UserHomeController::class, "index"])->middleware('auth')->name('home');

Route::get('/welcome', function () {
    return view('welcome');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
