<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Actividad extends Model
{   
    use SoftDeletes;
    protected $table= "actividades";
    public $timestamps = false;

    protected $fillable = [
    'nombre',
    'fecha_entrada',
    'duracion',
    'semestre',
    'grupo',
    'carrera',
    'asignatura',
    'equipo',
    "profesor",
    'observaciones',
];
}
