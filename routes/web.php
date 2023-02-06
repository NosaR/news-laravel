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
    return view('home');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/indeks', function () {
    return view('indeks');
});

Route::get('/lainnya', function () {
    return view('lainnya');
});

Route::get('/artikel', function () {
    return view('artikel');
});

Route::get('/kategori', function () {
    return view('kategori');
});

Route::get('/daftar_penulis', function () {
    return view('daftar_penulis');
});

Route::get('/kirim_artikel', function () {
    return view('kirim_artikel');
});

Route::get('/masuk/redaksimyway', function () {
    return view('/login/redaksimyway');
});

Route::get('/dapur', function () {
    return view('dapur.dapur_admin');
});

// Dashboard Artikel
Route::get('/dapur/list-artikel', function () {
    return view('dapur.artikel.index');
});

Route::get('/dapur/buat-artikel', function () {
    return view('dapur.artikel.create');
});

Route::get('/dapur/edit-artikel', function () {
    return view('dapur.artikel.edit');
});

Route::get('/dapur/draft-artikel', function () {
    return view('dapur.artikel.konsep');
});

Route::get('/dapur/jadwal-artikel', function () {
    return view('dapur.artikel.jadwal');
});
