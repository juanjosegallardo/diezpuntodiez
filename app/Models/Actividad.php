<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Actividad extends Model
{   
    use SoftDeletes;
    protected $table= "actividades";
    public $timestamps = false;
    
    protected $casts = [
        'fecha_entrada' => 'datetime',
        'ended_at' => 'datetime',
    ];

    public function getEndedAtAttribute()
    {
        if (!$this->fecha_entrada || !$this->duracion) {
            return null;
        }

        return $this->fecha_entrada->copy()->addMinutes($this->duracion);
    }

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
    "url"
];

    public function scopeFiltrarFecha($query, $dia = null, $mes = null, $anio = null)
    {
        if (!empty($anio)) {
            $query->whereYear('fecha_entrada', $anio);
        }

        if (!empty($mes)) {
            $query->whereMonth('fecha_entrada', $mes);
        }

        if (!empty($dia)) {
            $query->whereDay('fecha_entrada', $dia);
        }

        return $query;
    }  
}
