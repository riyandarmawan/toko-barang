<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Middleware\IsAdminMiddleware;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\AuthenticationController;

Route::get('/auth/login', [AuthenticationController::class, 'login'])->name('login');
Route::post('/auth/login', [AuthenticationController::class, 'loginProcess'])->name('loginProcess');

Route::group(['middleware' => ['auth:admin']], function () {
    // barang
    Route::get('/dashboard/barang', [BarangController::class, 'index'])->name('barang')->middleware(IsAdminMiddleware::class);

    // transaksi
    Route::get('/dashboard/transaksi', [TransaksiController::class, 'index'])->name('transaksi');
});
