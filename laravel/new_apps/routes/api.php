<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\PelangganController;
use App\Http\Middleware\IsAdminMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/auth/login', LoginController::class);

// pelanggan
Route::get('/pelanggans', [PelangganController::class, 'index']);
Route::get('/pelanggans/get/{id}', [PelangganController::class, 'get']);
Route::POST('/pelanggans/update/{id}', [PelangganController::class, 'update']);
Route::get('/pelanggans/delete/{id}', [PelangganController::class, 'delete']);