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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/login', function () {
    return view('front-end.index');
});
Route::get('/contact', function () {
    return view('front-end.contact');
});
Route::get('/home', function () {
    return view('front-end.home');
});
Route::get('/admin', function () {
    return view('back-end.index');
});
