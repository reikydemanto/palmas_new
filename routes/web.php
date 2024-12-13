<?php

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

Route::get('/', 'LandingPage@index');
Route::get('/salessheetnpew2025', 'LandingPage@download');
Route::get('/product', 'Product@index');
Route::get('/shop', 'Shop@index');
Route::get('/pointofsales', 'PointOfSales@index');
Route::get('/contact', 'Contact@index');
