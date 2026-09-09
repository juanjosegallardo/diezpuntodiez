<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use Illuminate\Http\Request;

class ActividadController extends Controller
{
    public function index()
    {
        return Actividad::whereRaw(
            'fecha_entrada <= NOW()
            AND DATE_ADD(fecha_entrada, INTERVAL duracion MINUTE) >= NOW()'
        )
        ->orderBy('nombre', 'ASC')
        ->get();
    }
    public function store(Request $request)
    {
        $request->validate([
            'semestre'   => 'required|integer',
            'grupo'      => 'required|string|max:255',
            'carrera'    => 'required|string|max:255',
            'asignatura' => 'required|string|max:255',
            'observaciones' => 'nullable|string|max:255',

            'nombre'     => 'required|string|max:255',
            'profesor'   => 'required|string|max:255',
            'fecha'      => 'required|date',
            'hora'       => 'required',
            'aula'       => 'required|string|max:255',
            'duracion'   => 'required|integer',
            'url'        => 'nullable|url|max:500',
        ], [
            'semestre.required'   => 'Selecciona el semestre.',
            'semestre.integer'    => 'El semestre no es válido.',

            'grupo.required'      => 'Indica el grupo.',
            'carrera.required'    => 'Indica la carrera.',
            'asignatura.required' => 'Indica la asignatura.',

            'nombre.required'     => 'Escribe el nombre de la actividad.',
            'profesor.required'   => 'Selecciona o escribe el profesor.',
            'fecha.required'      => 'Selecciona la fecha.',
            'fecha.date'          => 'La fecha no es válida.',
            'hora.required'       => 'Selecciona la hora.',
            'aula.required'       => 'Indica el aula.',
            'duracion.required'   => 'Indica cuánto durará la actividad.',
            'duracion.integer'    => 'La duración debe ser un número.',
            'url.url'             => 'Escribe una URL válida.',
        ]);

        $fechaEntrada = $request->fecha . ' ' . $request->hora . ':00';

        $actividad = Actividad::create([
            'semestre'      => $request->semestre,
            'grupo'         => $request->grupo,
            'carrera'       => $request->carrera,
            'asignatura'    => $request->asignatura,
            'observaciones' => $request->observaciones,
            'fecha_entrada' => $fechaEntrada,
            'duracion'      => $request->duracion,
            'equipo'        => $request->aula,
            'nombre'        => $request->nombre,
            'profesor'      => $request->profesor,
            'url'           => $request->url,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Actividad registrada correctamente.',
            'id'      => $actividad->id,
        ], 201);
    }
}