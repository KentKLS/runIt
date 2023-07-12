<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackofficeController;
use App\Http\Controllers\BackofficeProductController;
use App\Http\Controllers\BackofficeUserController;
use App\Http\Controllers\BackofficeCategoryController;
use App\Http\Controllers\BackofficeAddressController;
use App\Http\Controllers\BackofficeCartItemsController;
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


Route::get('/backoffice/product/add', [BackofficeController::class, "showAddProduct"])->middleware('auth', 'admin')->name('addProduct');
Route::post('/backoffice/product/stored', [BackofficeController::class, "addProduct"])->middleware('auth', 'admin')->name('addProductStored');

Route::get('/backoffice/data', [BackofficeController::class, "showSeeData"])->middleware('auth', 'admin')->name('showSeeData');
Route::post('/backoffice/data/get', [BackofficeController::class, "getData"])->middleware('auth', 'admin')->name('getData');

Route::get('/backoffice/product/delete', [BackofficeController::class, "showDeleteProduct"])->middleware('auth', 'admin')->name('deleteProduct');
Route::delete('/backoffice/product/deleted', [BackofficeController::class, "deleteProduct"])->middleware('auth', 'admin')->name('productDeleted');

Route::get('/backoffice/products', [BackofficeController::class, "showProducts"])->middleware('auth', 'admin')->name('backofficeProducts');
Route::get('/backoffice/product/modify/{id}', [BackofficeController::class, "showProductToModify"])->middleware('auth', 'admin')->name('productToModify');
Route::put('/backoffice/product/{id}/modified', [BackofficeController::class, "modifyProduct"])->middleware('auth', 'admin')->name('productModified');

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

    Route::prefix('/cart_items')->name('cart_item.')->group(function () {
        Route::get('/', [BackofficeCartItemsController::class, "index"])->name('index');
        Route::get('/create', [BackofficeCartItemsController::class, "create"])->name('create');
        Route::post('/', [BackofficeCartItemsController::class, "store"])->name('store');
        Route::get('/{cart_item}', [BackofficeCartItemsController::class, "show"])->name('show');
        Route::get('/{cart_item}/edit', [BackofficeCartItemsController::class, "edit"])->name('edit');
        Route::put('/{cart_item}', [BackofficeCartItemsController::class, "update"])->name('update');
        Route::delete('/{cart_item}', [BackofficeCartItemsController::class, "destroy"])->name('destroy');
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
