<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Usuario;
class Dato extends Model
{
    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }
}
