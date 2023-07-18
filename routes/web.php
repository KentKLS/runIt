<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackofficeController;
use App\Http\Controllers\BackofficeProductController;
use App\Http\Controllers\BackofficeUserController;
use App\Http\Controllers\BackofficeCategoryController;
use App\Http\Controllers\BackofficeAddressController;
use App\Http\Controllers\BackofficeCartItemsController;
use App\Http\Controllers\BackofficeOrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderProductController;

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
Route::delete('/cart', [CartController::class, 'destroy'])->name('cart.destroy');


Route::prefix('/catalogue')->group(function () {
    Route::get('/trail', [ProductController::class, "showProducts"])->name('showProducts');
    Route::get('/name', [ProductController::class, "showProductsOrderedByName"]);
    Route::get('/cat1', [ProductController::class, "showCategoryOne"]);
    Route::get('/cat2', [ProductController::class, "showCategoryTwo"]);
    Route::get('/cat3', [ProductController::class, "showCategoryThree"]);
    Route::get('/price', [ProductController::class, "showOrderedByGrowingPrice"]);
});

Route::get('/product/{id}', [ProductController::class, "showProduct"])->where('id', '[0-9]+');
Route::post('/product/{id}', [CartController::class, "store"])->where('id', '[0-9]+')->name('cart.store');
Route::put('/cartUpdate', [CartController::class, "quantityUpdate"])->name('cart.quantity.update');

Route::get('/checkout', [OrderController::class, "show"]);
Route::post('/checkout', [OrderController::class, "convertCartToOrder"])->name('order.convert');

Route::get('/backoffice', [UserHomeController::class, "index"])->middleware('auth')->name('backoffice');



Route::prefix('/backoffice')->middleware('auth', 'admin')->group(function () {

    Route::prefix('/products')->name('product.')->group(function () {

        Route::get('/', [BackofficeProductController::class, "index"])->name('index');
        Route::get('/create', [BackofficeProductController::class, "create"])->name('create');
        Route::post('/', [BackofficeProductController::class, "store"])->name('store');
        Route::get('/{product}', [BackofficeProductController::class, "show"])->name('show');
        Route::get('/{product}/edit', [BackofficeProductController::class, "edit"])->name('edit');
        Route::put('/{product}', [BackofficeProductController::class, "update"])->name('update');
        Route::delete('/{product}', [BackofficeProductController::class, "destroy"])->name('destroy');
    });

    Route::prefix('/users')->name('user.')->group(function () {
        Route::get('/', [BackofficeUserController::class, "index"])->name('index');
        Route::get('/create', [BackofficeUserController::class, "create"])->name('create');
        Route::post('/', [BackofficeUserController::class, "store"])->name('store');
        Route::get('/{user}', [BackofficeUserController::class, "show"])->name('show');
        Route::get('/{user}/edit', [BackofficeUserController::class, "edit"])->name('edit');
        Route::put('/{user}', [BackofficeUserController::class, "update"])->name('update');
        Route::delete('/{user}', [BackofficeUserController::class, "destroy"])->name('destroy');
    });

    Route::prefix('/categories')->name('category.')->group(function () {
        Route::get('/', [BackofficeCategoryController::class, "index"])->name('index');
        Route::get('/create', [BackofficeCategoryController::class, "create"])->name('create');
        Route::post('/', [BackofficeCategoryController::class, "store"])->name('store');
        Route::get('/{category}', [BackofficeCategoryController::class, "show"])->name('show');
        Route::get('/{category}/edit', [BackofficeCategoryController::class, "edit"])->name('edit');
        Route::put('/{category}', [BackofficeCategoryController::class, "update"])->name('update');
        Route::delete('/{category}', [BackofficeCategoryController::class, "destroy"])->name('destroy');
    });

    Route::prefix('/addresses')->name('address.')->group(function () {
        Route::get('/', [BackofficeAddressController::class, "index"])->name('index');
        Route::get('/create', [BackofficeAddressController::class, "create"])->name('create');
        Route::post('/', [BackofficeAddressController::class, "store"])->name('store');
        Route::get('/{address}', [BackofficeAddressController::class, "show"])->name('show');
        Route::get('/{address}/edit', [BackofficeAddressController::class, "edit"])->name('edit');
        Route::put('/{address}', [BackofficeAddressController::class, "update"])->name('update');
        Route::delete('/{address}', [BackofficeAddressController::class, "destroy"])->name('destroy');
    });
    Route::prefix('/orders')->name('order.')->group(function () {
        Route::get('/', [BackofficeOrderController::class, "index"])->name('index');
        Route::get('/create', [BackofficeOrderController::class, "create"])->name('create');
        Route::post('/', [BackofficeOrderController::class, "store"])->name('store');
        Route::get('/{order}', [BackofficeOrderController::class, "show"])->name('show');
        Route::get('/{order}/edit', [BackofficeOrderController::class, "edit"])->name('edit');
        Route::put('/{order}', [BackofficeOrderController::class, "update"])->name('update');
        Route::delete('/{order}', [BackofficeOrderController::class, "destroy"])->name('destroy');
        Route::delete('/', [OrderProductController::class, "destroy"])->name('product.destroy');
        Route::get('/{order}/product/create', [OrderProductController::class, "create"])->name('product.create');
        Route::put('/product/store', [OrderProductController::class, "store"])->name('product.store');
    });
});







Route::get('/welcome', function () {
    return view('welcome');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
