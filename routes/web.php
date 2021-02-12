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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return view('profile');
});




Route::get('/buy', function () {
    return view('buy');
});

Route::get('/buy2', function () {
    return view('buy2');
});

Route::get('/congrats', function () {
    return view('congrats');
});




Route::get('/register', function () {
    return view('register');
});

Route::get('/edit', function () {
    return view('edit');
});
