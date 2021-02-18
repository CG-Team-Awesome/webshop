<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{ProductController, CategoryController, SupplierController};

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
Route::view('/', 'welcome');  // TODO rename naar home?

// PRODUCTEN
Route::get('product', [ProductController::class, 'index'])->name('products.index');
Route::get('product/nieuw', [ProductController::class, 'create'])->name('products.create');
Route::post('product', [ProductController::class, 'store'])->name('products.store');
Route::get('product/{id}', [ProductController::class, 'show'])->name('products.show');
Route::get('product/{id}/bewerk', [ProductController::class, 'edit'])->name('products.edit');
Route::put('product/{id}',[ProductController::class, 'update'])->name('products.update');
Route::delete('product/{id}', [ProductController::class, 'delete'])->name('products.delete');

// Categorieën en Leveranciers
Route::resource('categorie', CategoryController::class);
Route::resource('leverancier', SupplierController::class);

//authentication stuff
require __DIR__.'/auth.php';






//breeze default log-in destination
Route::view('/dashboard', 'dashboard')
        ->middleware(['auth'])->name('dashboard');

// CART views
Route::view('/buy', '/product/buy');
Route::view('/buy2', '/product/buy2');
Route::view('/congrats', '/product/congrats');

// USER views
Route::view('/edit', '/user/edit');
Route::view('/profile', '/user/profile');

// ADMIN views
Route::view('/admin/', '/admin/login');
Route::view('/admin/login', '/admin/login');
Route::view('/admin/productlist', '/admin/productlist');
Route::view('/admin/add', '/admin/add');
Route::view('/admin/show', '/admin/show');
