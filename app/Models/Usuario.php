<?php

namespace App\Models;

use App\Models\Dato;
use App\Models\Registro;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Usuario extends Model
{
    
    use SoftDeletes;

    protected $hidden= ["password"]; 


    public function datos()
    {
        return $this->hasMany(Dato::class);

    }
    public function registros()
    {
        return $this->hasMany(Registro::class);

    }

}
