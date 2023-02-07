<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Auth;
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
    return view('login.redaksimyway');
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

//DASHBOARD GAMBAR
Route::get('/dapur/list-image', function () {
    return view('dapur.images-blade.index');
});

Route::get('/dapur/create-image', function () {
    return view('dapur.images-blade.create');
});

Route::get('/dapur/edit-image', function () {
    return view('dapur.images-blade.edit');
});


Auth::routes();

//DASHBOARD INPUT USER
Route::get('/user', function () {
    return view('register.index');
});

Route::get('/user/register', function () {
    return view('register.create');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource("/image", ImageController::class);
// Route::resource("/article", ArticleController::class);

Route::group(['middleware' => 'super-admin'], function() {
    Route::get('/super-admin/home', [App\Http\Controllers\HomeController::class, 'handleSuperAdmin'])->name('handleSuperAdmin');
    Route::get('/super-admin/home/user/', [App\Http\Controllers\HomeController::class, 'user'])->name('user');
    Route::get('/super-admin/home/user/register', [App\Http\Controllers\HomeController::class, 'registerUser'])->name('registerUser');

    //ROUTE IMAGE
});

Route::group(['middleware' => 'chief-editor'], function() {
    Route::get('/chief-editor/home', [App\Http\Controllers\HomeController::class, 'handleChiefEditor'])->name('handleChiefEditor');

    //ROUTE IMAGE
});

Route::group(['middleware' => 'editor'], function() {
    Route::get('/editor/home', [App\Http\Controllers\HomeController::class, 'handleEditor'])->name('handleEditor');

    //ROUTE IMAGE
});

Route::group(['middleware' => 'ads-editor'], function() {
    Route::get('/ads-editor/home', [App\Http\Controllers\HomeController::class, 'handleAdsEditor'])->name('handleAdsEditor');

    //ROUTE IMAGE
});

Route::group(['middleware' => 'author'], function() {
    Route::get('/author/home', [App\Http\Controllers\HomeController::class, 'handleAuthor'])->name('handleAuthor');

    //ROUTE IMAGE
});
