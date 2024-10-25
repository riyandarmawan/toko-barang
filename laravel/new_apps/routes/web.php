<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\TransaksiController;
use App\Http\Middleware\IsAdminMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/auth/login', [AuthenticationController::class, 'login'])->name('login');

Route::post('/auth/login', [AuthenticationController::class, 'loginProcess']);

Route::post('/auth/logout', [AuthenticationController::class, 'logout']);

// Dashboard
Route::middleware('auth:admin')->group(function () {
    Route::get('/dashboard/barang', [BarangController::class, 'index'])->middleware(IsAdminMiddleware::class);

    Route::get('/dashboard/transaksi', [TransaksiController::class, 'index']);
});
