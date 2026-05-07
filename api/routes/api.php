<?php

// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
// Route::get('/profile', [AuthController::class, 'profile'])->middleware('auth:sanctum');
// Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('/profile', [AuthController::class, 'profile']);
    Route::post('/logout', [AuthController::class, 'logout']);

    // route products
    Route::apiResource('/products', ProductController::class);
});
