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

Route::post('/auth/register', RegisterController::class);
Route::post('/auth/login', LoginController::class);

Route::middleware('auth:sanctum')->group(function() {
    Route::apiResource('/pelanggans', PelangganController::class);
});