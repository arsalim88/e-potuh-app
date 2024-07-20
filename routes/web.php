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

Route::get('/service', function () {
    return view('service');
});

Route::get('/information', function () {
    return view('information');
});

Route::get('/cetak', function () {
    return view('cetak');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/home_admin', function () {
    return view('home_admin');
});

Route::get('/admin_pelanggan', function () {
    return view('admin_pelanggan');
});
Route::get('/datatarif', function () {
    return view('datatarif');
});

Route::get('/adduser', function () {
    return view('adduser');
});

Route::get('/addadmin', function () {
    return view('addadmin');
});

Route::get('/addtarif', function () {
    return view('addtarif');
});

Route::get('/datatagihan', function () {
    return view('datatagihan');
});

Route::get('/addtagihan', function () {
    return view('addtagihan');
});

Route::get('/sdashbord', function () {
    return view('sdashbord');
});