<?php

use App\Http\Controllers\ActividadController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PrestamoController;
use App\Http\Controllers\RegistroController;
use App\Models\Prestamo;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post("login",[UsuarioController::class, "login"]);

Route::get("/users",[UsuarioController::class, "index"]);

Route::get("/users/id",[UsuarioController::class, "obtenerPropiedades"]);

Route::get("/actividades",[ActividadController::class, "index"]);

Route::get("/prestamos", [PrestamoController::class, "index"]);

Route::get("/registro", [RegistroController::class, "registro"]);


Route::post('/actividades', [ActividadController::class, 'store']);