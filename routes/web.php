<?php

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
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(["middleware" => "auth"], function(){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('profile', 'ProfileController@index')->name('profile');
    Route::put('profile/{id}', 'ProfileController@update')->name('profileUpdate');
    
    Route::get('produkAjax/{id}', 'AppController\ProdukController@show');
});

Route::group(["middleware" => ["role.AdminUtama", "auth"]], function(){
    Route::resource("informasiToko", "AppController\InformasiTokoController");
    Route::resource("users", "AppController\UserController");
});

Route::group(["middleware" => ["role.AdminGudang", "auth"]], function(){
    Route::resource("currencies", "AppController\CurrencyController");
    Route::resource("ppn", "AppController\PpnController");
    Route::resource("unit", "AppController\UnitController");
    Route::resource("persentaseKeuntungan", "AppController\PersentaseKeuntunganController");
    Route::resource("bahan", "AppController\BahanController");
    Route::resource("kategoriProduk", "AppController\KategoriController");
    Route::resource("semuaProduk", "AppController\ProdukController");
    Route::resource("produkKosong", "AppController\ProdukKosongController");
    
    Route::get("produkMasuk", "AppController\ProdukMasukController@index")->name('produkMasuk');
});

Route::group(["middleware" => "role.Kasir", "auth"], function(){
    Route::resource("transaksi", "AppController\CartController");
    Route::resource("checkout", "AppController\CheckoutController");
    Route::resource("invoice", "AppController\InvoiceController");

    Route::get("transaksiClean", "AppController\CartController@transaksiClean")->name('transaksiClean');
});

route::group(['prefix' => 'print'], function(){
    Route::get("users", "AppController\UserController@print")->name('printUsers');
    Route::get("kategoriProduk", "AppController\KategoriController@print")->name('printKategoriProduks');
    Route::get("produkMasuk", "AppController\ProdukMasukController@print")->name('printProdukMasuks');
    Route::get("produkKosong", "AppController\ProdukKosongController@print")->name('printProdukKosongs');
    Route::get("riwayatTransaksi", "AppController\InvoiceController@print")->name('printRiwayatTransaksi');
});