<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//authentication stuff
require __DIR__ . '/auth.php';


// CART pages
Route::get('/buy', function () {
    return view('/product/buy');
});
Route::get('/buy2', function () {
    return view('/product/buy2');
});
Route::get('/congrats', function () {
    return view('/product/congrats');
});

// PRODUCT PAGES
Route::get('show', function () {
    return view('/product/show');
});
Route::get('allproducts', function () {
    return view('/product/all');
});
// USER PAGES
Route::get('/edit', function () {
    return view('/user/edit');
});
Route::get('/profile', function () {
    return view('/user/profile');
});

// ADMIN PAGES
Route::get('/admin/', function () {
    return view('/admin/login');
});
Route::get('/admin/login', function () {
    return view('/admin/login');
});
Route::get('/admin/productlist', function () {
    return view('/admin/productlist');
});
Route::get('/admin/add', function () {
    return view('/admin/add');
});
Route::get('/admin/show', function () {
    return view('/admin/show');
});
