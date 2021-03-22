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

/**
 * --------------------------------------------------------------------------
 * Guest - Web Routes
 * --------------------------------------------------------------------------
 *
 *
 *
 */
Route::get('/', function () {
    return view('ogani.index');
})->name('home');

Route::get('/shop', function () {
    return view('ogani.shop-grid');
})->name('shop-grid');

Route::get('/cart', function () {
    return view('ogani.shoping-cart');
})->name('shoping-cart');

/**
 * --------------------------------------------------------------------------
 * Admin - Web Routes
 * --------------------------------------------------------------------------
 *
 *
 *
 */
Route::middleware(['auth:sanctum', 'verified'])
    ->get('/dashboard', function () {
        return view('adminlte.dashboard');
    })
    ->name('dashboard');
