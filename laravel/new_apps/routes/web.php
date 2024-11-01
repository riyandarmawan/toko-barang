<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Middleware\IsAdminMiddleware;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\AuthenticationController;

Route::get('/auth/login', [AuthenticationController::class, 'login'])->name('login');

Route::post('/auth/login', [AuthenticationController::class, 'loginProcess']);

Route::post('/auth/logout', [AuthenticationController::class, 'logout']);

// Dashboard
Route::middleware('auth:admin')->group(function () {
    // transaksi
    Route::get('/dashboard/transaksi', [TransaksiController::class, 'index']);

    Route::middleware(IsAdminMiddleware::class)->group(function () {
        // barang
        Route::get('/dashboard/barang', [BarangController::class, 'index']);
        Route::post('/dashboard/barang/tambah', [BarangController::class, 'add']);

        // pelanggan
        Route::get('/dashboard/pelanggan', [PelangganController::class, 'index']);
        Route::post('/dashboard/pelanggan/tambah', [PelangganController::class, 'add']);
    });
});