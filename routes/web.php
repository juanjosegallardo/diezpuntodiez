<?php

use App\Http\Controllers\ActividadController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegistroController;
use App\Http\Controllers\UsuarioController;


Route::get('/logout', [UsuarioController::class, "logout"]);

Route::get('/me', [RegistroController::class, "me"]);


Route::get("/actividades/{id}/seb",[ActividadController::class, "seb"]);

Route::get("/lanzador",[ActividadController::class, "lanzador"]);

Route::get('/ok', function () {
    return view('bienvenido');
});
Route::get('/', function () {
    return view('principal');
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
Route::get("pdfs/usuarios/versiones/c",[RegistroController::class, "generarReporte"]);
Route::get("pdfs/usuarios/versiones/d",[RegistroController::class, "generarReporteD"]);

Route::get("pdfs/docentes/versiones/d",[RegistroController::class, "generarReporteDocentes"]);

Route::get("accesos",[RegistroController::class, "generarReporteAccesos"]);
Route::get("aceptacion",[RegistroController::class, "generarReporteAceptacion"]);
Route::view("actas", "actas");