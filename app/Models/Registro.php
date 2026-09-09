<?php

namespace App\Models;
use App\Models\Usuario;
use App\Models\Actividad;
use Carbon\Carbon;

use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'ended_at'   => 'datetime',
        ];

    protected $fillable = ["duracion", "ended_at"];
    public function scopeFiltrarFecha($query, $dia = null, $mes = null, $anio = null)
    {
        if (!empty($anio)) {
            $query->whereYear('created_at', $anio);
        }

        if (!empty($mes)) {
            $query->whereMonth('created_at', $mes);
        }

        if (!empty($dia)) {
            $query->whereDay('created_at', $dia);
        }

        return $query;
    }        
    public function usuario()
    {
     return $this->belongsTo(Usuario::class);
    }

    public function actividad()
    {
     return $this->belongsTo(Actividad::class);
    }

    protected static function booted()
    {
        static::creating(function ($registro) {
            $endedAt = Carbon::parse($registro->created_at)->addMinutes($registro->duracion);

           $existe = Registro::where('created_at', '<=',  Carbon::parse($registro->created_at))
                ->where('ended_at', '>=', Carbon::parse($registro->created_at))
                ->where("usuario_id", "like", $registro->usuario_id)
                ->where("ip", "like", $registro->ip)
                ->exists();

            if ($existe) {
                return false;
            }

            $registro->ended_at = $endedAt;
        });
    }
}
