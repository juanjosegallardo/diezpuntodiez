<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegistroController;
use App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/logout', [UsuarioController::class, "logout"]);

Route::get('/me', [RegistroController::class, "me"]);

Route::get('/ok', function () {
    return view('bienvenido');
});

Route::get('/correo', [RegistroController::class, "correo"]);

Route::get('/test', function () {
    return view('portal');
});

Route::get('/actividades', function () {
    return view('actividades');
});

Route::get('/success', function () {
   [UsuarioController::class, "logout"];
});

Route::get('/busqueda', function () {
    return view('busqueda');
});



Route::get("reporte",[RegistroController::class, "generarReporte"]);
Route::get("practicas/versiones/c",[RegistroController::class, "generarReporte"]);
Route::get("practicas/versiones/d",[RegistroController::class, "generarReporteD"]);

Route::get("accesos",[RegistroController::class, "generarReporteAccesos"]);
Route::get("aceptacion",[RegistroController::class, "generarReporteAceptacion"]);
Route::view("actas", "actas");