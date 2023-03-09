<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\AdminController;
use app\Http\Controllers\BeliController;
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
//     return view('dashboard');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', function () {
    return view('home');
});

Route::get('/AboutUs', function () {
    return view('about_us');
});

// view beli barang
Route::get('/BeliBarang','BeliController@BeliBarang');

// Beli barang 
Route::get('/BeliBarang1/{id}','BeliController@formbelibarang');
Route::post('/transaksi','BeliController@transaksibelibarang');



// Admin
Route::get('/admin','AdminController@Admin')->middleware('auth');

//view kategori
Route::get('/Kategori','AdminController@viewdataKategori');

//hapus kategori
Route::get('/Deletekategori/{id}','AdminController@deletedataKategori');

//Tambah Kategori
Route::get('/TambahKategori','AdminController@TambahKategori');
Route::post('/FormTambahKategori','AdminController@formTambahKategori');

// Edit Kategori
Route::get('/EditDataKategori/{id}','AdminController@editdataKategori');
Route::post('/FormEditKategori','AdminController@formeditKategori');

//View Produk
Route::get('/Produk','AdminController@viewdataProduk');

//Delete produk
Route::get('/DeleteProduk/{id}','AdminController@deletedataProduk');

//Tambah Produk
Route::get('/TambahProduk','AdminController@TambahProduk');
Route::post('/FormTambahProduk','AdminController@formTambahProduk');

//Edit Produk
Route::get('/EditDataProduk/{id}','AdminController@editdataProduk');
Route::post('/FormEditProduk','AdminController@formeditProduk');








