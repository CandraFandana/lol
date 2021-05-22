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
    return view('Home0154');
});
Route::get('/artikel0154', function () {
    return view('artikel0154');
});
Route::get('/contactus0154', function () {
    return view('contactus0154');
});