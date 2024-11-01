<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdminMiddleware;
use App\Http\Controllers\Api\BarangController;
use App\Http\Controllers\Api\PelangganController;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\RegisterController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/auth/login', LoginController::class);

// pelanggan
Route::get('/pelanggans', [PelangganController::class, 'index']);
Route::get('/pelanggans/get/{id}', [PelangganController::class, 'get']);
Route::POST('/pelanggans/update/{id}', [PelangganController::class, 'update']);
Route::get('/pelanggans/delete/{id}', [PelangganController::class, 'delete']);

// barang
Route::get('/barangs', [BarangController::class, 'index']);
Route::get('/barangs/get/{id}', [BarangController::class, 'get']);
Route::POST('/barangs/update/{id}', [BarangController::class, 'update']);
Route::get('/barangs/delete/{id}', [BarangController::class, 'delete']);