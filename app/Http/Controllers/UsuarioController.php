<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Registro;
use Carbon\Carbon;


class UsuarioController extends Controller
{


    public function index(Request $request)
    {
        $busqueda = $request->busqueda;
        return Usuario::orderBy("nombre")->where("nombre", "like",  "%{$busqueda}%")->get();

    }

    public function logout(Request $request)
    {
        $now = Carbon::now();

        $registros = Registro::where('ended_at', '>', $now)
        ->where('created_at', '<', $now)
        ->where('ip', $request->ip())
        ->get();

        foreach ($registros as $registro) {
            $duracion = $registro->created_at->diffInMinutes($now);

            $registro->update([
                'duracion' => $duracion,
                'ended_at' => $now,
            ]);
        }

        return view("logout");
    }

    


    

    public function login(Request $request)
    {
        if($request->actividad =="")
        {
             return response()->json(["codigo"=>"error", "message"=>"Especifica la actividad" ],400);
        }

        $usuario = Usuario::where("usuario", $request->usuario)
            ->where("password", $request->password)->first();

        if($usuario)
        {
            $usuario->codigo = "cecyteg";
            $duraciones = ["alumno_50"=>50, "alumno_100"=>100, "alumno_150"=>150];
            $registro = new Registro();
            $registro->usuario_id= $usuario->id;
            $registro->ip = request()->ip();
            $registro->duracion =  $duraciones[$request->duracion];
            $registro->actividad =  $request->actividad;
            if (filter_var($request->actividad, FILTER_VALIDATE_INT) !== false) 
            {
                $registro->actividad_id = $request->actividad;
            }
                    
            
            $registro->save();
            return response()->json($usuario);
        }
        else
        {
            return response()->json(["codigo"=>"error", "message"=>"Usuario o password incorrectos" ],404);
        }
    }
}
