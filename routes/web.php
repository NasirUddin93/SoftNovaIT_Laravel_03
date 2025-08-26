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

Route::get('/', function () {
    return view('home');
});
Route::get('/contact', function () {
    return view('home')->name('contact');
});
Route::get('/services', function () {
    return view('frontend.services');
});
Route::view('/web_service', 'frontend.webservice')->name('web_service');
