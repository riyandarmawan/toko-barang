<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Route;

Route::get('/auth/login', [AuthenticationController::class, 'login'])->name('login');
Route::post('/auth/login', [AuthenticationController::class, 'loginProcess'])->name('loginProcess');

Route::get('/dashboard/barang', [BarangController::class, 'index'])->name('barang');