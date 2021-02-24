<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{HomeController, ProductController, CategoryController, SupplierController, UserController};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// HOME
Route::get ('/', [HomeController::class, 'index'])->name('home');

Route::get('product', [ProductController::class, 'index'])->name('product.index');
Route::get('product/{id}', [ProductController::class, 'show'])->name('product.show');


// Admin: Products, Categories and Suppliers
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('product', ProductController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('supplier', SupplierController::class);
});

// Admin: User control
Route::get('/admin/users/index', [UserController::class, 'index'])->name('admin.users');

// User routes
Route::get('profile/edit', [UserController::class, 'edit'])->name('profile.edit')
        ->middleware(['auth']);
Route::get('profile', [UserController::class, 'show'])->name('profile.show')
        ->middleware(['auth']);
Route::put('profile', [UserController::class, 'update'])->name('profile.update')
        ->middleware(['auth']);



//authentication stuff
require __DIR__ . '/auth.php';



//breeze default log-in destination
Route::view('/dashboard', 'dashboard')
        ->middleware(['auth'])->name('dashboard');

// CART views
Route::view('buy', 'product.buy');
Route::view('buy2', 'product.buy2');
Route::view('congrats', 'product.congrats');

// ADMIN views
Route::view('admin', 'admin.login');
Route::view('admin/login', 'admin.login');
Route::view('admin/productlist', 'admin.productlist');
Route::view('admin/add', 'admin.add');
Route::view('admin/show', 'admin.show');
