<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransaksiController;

// Route::get('/', function () {
//     return view('dashboard');
// });


Route::get('/',[DashboardController::class,'index'])->name('dashboard.index');


// Login__________________________________________________
Route::get('login',[AuthController::class,'login'])->name('login');
Route::post('login',[AuthController::class,'actionlogin'])->name('actionlogin');
Route::get('logout',[AuthController::class,'logout'])->name('logout');
// ________________________________________________________________________________



// Produk________________________________________________
Route::get('/produk',[ProdukController::class,'index'])->name('produk.index');
// ________________________________________________________________________________    
// Transaksi________________________________________________
Route::get('/export-transaksi', [ExportExcelController::class, 'export'])->name('export.transaksi');
Route::get('/transaksi/{id}/lihat', [TransaksiController::class, 'lihatStruk'])->name('transaksi.lihat');
// ________________________________________________________________________________

