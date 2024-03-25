<?php

use Illuminate\Support\Facades\Route;
use Src\Auth\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
|
| Rutas para el modulo de autenticacion
|
|
*/

// login
Route::post('/api/auth/login', [AuthController::class, 'login']);

Route::get('/api/auth/out', function () {
    return response()->json(['message' => 'Out - Ready'], 200);
});

Route::middleware(['auth:api'])->group(function () {

    Route::get('/api/auth/in', function () {
        return response()->json(['message' => 'In - Ready'], 200);
    });

    // logout
    Route::get('/api/auth/logout', [AuthController::class, 'logout']);
});
