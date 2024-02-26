<?php

use App\Http\Controllers\Api\Admin\AdminController;
use App\Http\Controllers\Api\AdminLoginController;
use App\Http\Controllers\Api\AdminSignupController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware(['auth:sanctum', 'auth:admin', 'ability:*'])
    ->prefix('/v1/admin')->group(function () {
        Route::get('/get-data', AdminController::class);
    });
// admin refresh token
Route::middleware(['auth:sanctum', 'auth:admin', 'ability:update:server'])
    ->prefix('/v1/admin')->group(function () {
        Route::put('/refresh-token', [AdminLoginController::class,'refresh_token']);
    });
// admin signup
Route::prefix('/v1/admin')->group(function () {
    Route::post('/signup', AdminSignupController::class);
    Route::post('/login', AdminLoginController::class);
});
