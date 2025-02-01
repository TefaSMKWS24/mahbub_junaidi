<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GuestController;


use App\Http\Controllers\KasirController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TransaksiController;

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
    return view('welcome');
});

//GUEST (SEBELUM LOGIN)
Route::middleware(['guest:kasir'])->group(function(){
    Route::get('/kasir', function (){ return view('auth.loginkasir'); })->name('loginkasir');
    Route::post('/loginkasir', [AuthController::class,'loginkasir']);
});
Route::middleware(['guest:admin'])->group(function(){
    Route::get('/admin', function (){ return view('auth.loginadmin'); })->name('loginadmin');
    Route::post('/loginadmin', [AuthController::class,'loginadmmin']);
});


//AUTH (SETELAH LOGIN)
Route::middleware(['auth:kasir'])->group(function(){
    Route::get('/kasir/dashboard', [dASHBOARDKasirController::class, 'dashboard']);
    Route::get('/kasir/logout', [AuthController::class, 'logoutkasir']);
});

Route::middleware(['auth:kasir'])->group(function(){
    Route::get('/kasir/dashboard', [dASHBOARDKasirController::class, 'dashboard']);
    Route::get('/kasir/logout', [AuthController::class, 'logoutkasir']);

    Route::resource('barang', BarangController::class);
    Route::resource('kategori', KategoriController::class);
    Route::resource('pelanggan', PelangganController::class);
    Route::resource('kasir', KasirController::class);
    Route::resource('Transaksi', TansaksiController::class);

});


