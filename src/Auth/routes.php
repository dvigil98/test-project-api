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

Route::middleware(['auth:api'])->group(function () {

    // logout
    Route::get('/api/auth/logout', [AuthController::class, 'logout']);
});
