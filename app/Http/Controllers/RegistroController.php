<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use Illuminate\Http\Request;
use App\Models\Registro;
use App\Models\Usuario;

use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use PHPUnit\Framework\MockObject\Stub\ReturnReference;

class RegistroController extends Controller
{
    public function generarReporte(Request $request)
    {
        ini_set('max_execution_time', 600); // 300 segundos = 5 minutos
        ini_set('memory_limit', '4096M'); // (opcional) aumenta el límite de memoria

        $mes = $request->mes;
        $anio =  $request->anio;
        $dia =  $request->dia;
        
        $registros = Registro::with(['usuario' => function ($query) {
            $query->withTrashed();
        }])
        ->filtrarFecha($dia, $mes, $anio)
        ->get();
        //return response()->json($registros);
        
        $pdf = Pdf::loadView('reporte', compact('registros'))->setPaper('letter', 'landscape');
        return $pdf->stream('reporte_usuarios.pdf');
        


    }
    public function generarReporteD(Request $request)
    {
        ini_set('max_execution_time', 600); // 300 segundos = 5 minutos
        ini_set('memory_limit', '4096M'); // (opcional) aumenta el límite de memoria

        $mes = $request->mes;
        $anio =  $request->anio;
        $dia =  $request->dia;
        
        $registros = Registro::with(['usuario' => function ($query) {
            $query->withTrashed();
        }])
        ->filtrarFecha($dia, $mes, $anio)
        ->get();
        //return response()->json($registros);
        
        $pdf = Pdf::loadView('reported', compact('registros'))->setPaper('letter', 'landscape');
        return $pdf->stream('reporte_usuarios_d.pdf');
        


    }

   public function generarReporteAceptacion(Request $request)
    {
        ini_set('max_execution_time', 600);
        ini_set('memory_limit', '4096M');

        $grupos= [
            2801=>[
                "especialidad"=>"352100002-16 - Producción Industrial de Alimentos-23",
                "semestre"=>"6",
                "grupo"=>"2320PIDM5A",
                "generacion"=>"2023-2026"
            ],
            2802=>[
                "especialidad"=>"352100002-16 - Producción Industrial de Alimentos-23",
                "semestre"=>"6",
                "grupo"=>"2320PIDM5B",
                "generacion"=>"2023-2026"
            ],
            2803=>[
                "especialidad"=>"352100002-16 - Producción Industrial de Alimentos-23",
                "semestre"=>"6",
                "grupo"=>"2320PIDM5C",
                "generacion"=>"2023-2026"
            ],

            2804=>[
                "especialidad"=>"351100002-16-Mantenimiento Industrial-23",
                "semestre"=>"6",
                "grupo"=>"2320MINM5D",
                "generacion"=>"2023-2026"
            ],
            
            2805=>[
                "especialidad"=>"3062300001-17-Soporte y Mantenimiento de Equipo de Cómputo-23",
                "semestre"=>"6",
                "grupo"=>"2320SMECM5E",
                "generacion"=>"2023-2026"
            ],

            2806=>[
                "especialidad"=>"3062300001-17-Soporte y Mantenimiento de Equipo de Cómputo-23",
                "semestre"=>"6",
                "grupo"=>"2320SMECM5F",
                "generacion"=>"2023-2026"
            ],

            2807=>[
                "especialidad"=>"3062300001-17-Soporte y Mantenimiento de Equipo de Cómputo-23",
                "semestre"=>"6",
                "grupo"=>"2320SMECM5G",
                "generacion"=>"2023-2026"
            ],

            2901=>[
                "especialidad"=>"3072100005-23-Producción Industrial de Alimentos-24",
                "semestre"=>"4",
                "grupo"=>"2420PIDM3A",
                "generacion"=>"2024-2027"
            ],

            2902=>[
                "especialidad"=>"3072100005-23-Producción Industrial de Alimentos-24",
                "semestre"=>"4",
                "grupo"=>"2420PIDM3B",
                "generacion"=>"2024-2027"
            ],

            2903=>[
                "especialidad"=>"3071100006-23-Mantenimiento Industrial-24",
                "semestre"=>"4",
                "grupo"=>"2420MINM3C",
                "generacion"=>"2024-2027"
            ],

            2904=>[
                "especialidad"=>"3071100006-23-Mantenimiento Industrial-24",
                "semestre"=>"4",
                "grupo"=>"2420MINM3D",
                "generacion"=>"2024-2027"
            ],

            2905=>[
                "especialidad"=>"3062300001-17-Soporte y Mantenimiento de Equipo de Cómputo-23",
                "semestre"=>"4",
                "grupo"=>"2420SMECM3E",
                "generacion"=>"2024-2027"
            ],

            2906=>[
                "especialidad"=>"3062300001-17-Soporte y Mantenimiento de Equipo de Cómputo-23",
                "semestre"=>"4",
                "grupo"=>"2420SMECM3F",
                "generacion"=>"2024-2027"
            ],

            3001=>[
                "especialidad"=>"Producción Industrial de Alimentos - 25 Matutino",
                "semestre"=>"2",
                "grupo"=>"2520PIAM2A",
                "generacion"=>"2025-2028"
            ],

            3002=>[
                "especialidad"=>"Producción Industrial de Alimentos - 25 Matutino",
                "semestre"=>"2",
                "grupo"=>"2520PIAM2B",
                "generacion"=>"2025-2028"
            ],

            3003=>[
                "especialidad"=>"Producción Industrial de Alimentos - 25 Matutino",
                "semestre"=>"2",
                "grupo"=>"2520PIAM2C",
                "generacion"=>"2025-2028"
            ],

            3004=>[
                "especialidad"=>"Programación - 25 Matutino",
                "semestre"=>"2",
                "grupo"=>"2520PROGM2D",
                "generacion"=>"2025-2028"
            ],

            3005=>[
                "especialidad"=>"Programación - 25 Matutino",
                "semestre"=>"2",
                "grupo"=>"2520PROGM2E",
                "generacion"=>"2025-2028"
            ],

            3006=>[
                "especialidad"=>"Programación - 25 Matutino",
                "semestre"=>"2",
                "grupo"=>"2520PROGM2F",
                "generacion"=>"2025-2028"
            ],

            
        ];

        $mes = $request->mes;
        $anio = $request->anio;
        $dia = $request->dia;
        $actividad = $request->actividad;
        $grupo = $request->grupo;
        $documento = $request->documento;
        $profesor = $request->profesor;
        $arr_actividad = explode("-",$actividad);

        $materia = $arr_actividad[1];
        // 1️⃣ Usuarios únicos ordenados por nombre
        $usuarios = Usuario::withTrashed()
            ->with(['registros' => function ($query) use ($dia, $mes, $anio, $actividad) {
                $query->filtrarFecha($dia, $mes, $anio)
                    ->where('actividad', $actividad);
            }])
            ->where('grupo', $grupo)
            ->whereHas('registros', function ($query) use ($dia, $mes, $anio, $actividad) {
                $query->filtrarFecha($dia, $mes, $anio)
                    ->where('actividad', $actividad);
            })
            ->orderBy('nombre')
            ->get();

        // 2️⃣ Aplanar → agrupar por usuario_id → dejar un registro por usuario
        $registros = $usuarios
            ->flatMap(fn ($usuario) => $usuario->registros)
            ->groupBy('usuario_id')
            ->map(fn ($grupo) => $grupo->first())
            ->values();

        $pdf = Pdf::loadView($documento, [
                'registros' => $registros,
                'materia'=>$materia,
                'grupo'=>$grupos[$grupo],
                'mes'=>$mes,
                'dia'=>$dia,
                'anio'=>$anio,
                'profesor'=>$profesor
                

        ])->setPaper('letter', 'portrait');

        return $pdf->stream('reporte_'. $grupo.'_'. $materia. '_aceptacion.pdf');
    }



    public function generarReporteAccesos()
    {
        $datos = Registro::selectRaw('
            MONTH(created_at) AS mes,
            YEAR(created_at) AS anio,
            SUBSTRING_INDEX(SUBSTRING_INDEX(ip, ".", 3), ".", -1) AS tercer_octeto,
            COUNT(DISTINCT usuario_id) AS total
        ')
        ->groupBy('anio', 'mes', 'tercer_octeto')
        ->orderBy('anio')
        ->orderBy('mes')
        ->orderByRaw('CAST(tercer_octeto AS UNSIGNED)')
        ->get();
        
        $pdf = Pdf::loadView('accesos', compact('datos'))->setPaper('letter', 'portrait');
        return $pdf->stream('reporte_usuarios.pdf');
    }


    public function me(Request $request)
    {
        $now = Carbon::now();
      
        
        $registro = Registro::where('ip', $request->ip())
        ->where('ended_at', '>', $now)
        ->where('created_at', '<', $now)
        ->with(["usuario.datos"])
        ->orderBy("created_at","DESC")
        ->first();



        if($request->test)
        {

            $registro = Registro::whereHas('usuario', function ($query) use ($request) {
                $query->where("usuario", "=", $request->test);
             
            })
            ->with('usuario.datos')
            ->orderBy('created_at', 'DESC')
            ->first();

            $registro->actividad = $request->url;
        }

        if(!$registro)
        {
            return view("nouser");
        }
        
        $registro->usuario->datos = $registro->usuario->datos->keyBy('propiedad')->toArray();
        
        if($request->url )
        {
            return view($request->url, ['registro' => $registro]);
        }
     
        
        return view("me", ['registro' => $registro]);
    }

    public function registro(Request $request)
    {
        $now = Carbon::now();
      
        
        $registro = Registro::where('ip', $request->ip())->with("usuario")
        ->where('ended_at', '>', $now)
        ->where('created_at', '<', $now)
        ->with(["usuario.datos"])
        ->orderBy("created_at","DESC")
        ->first();


        $actividad = $registro->actividad;
        $registro["url"]=$actividad->url?? "";
        return $registro;
    }


    public function abirActividad(Request $request)
    {
        $now = Carbon::now();
      
        
        $registro = Registro::where('ip', $request->ip())
        ->where('ended_at', '>', $now)
        ->where('created_at', '<', $now)
        ->with(["usuario.datos"])
        ->orderBy("created_at","DESC")
        ->first();


        if(!$registro)
        {
            return view("nouser");
        }
        
        $registro->usuario->datos = $registro->usuario->datos->keyBy('propiedad')->toArray();

              //  return response()->json($registro->actividad);
        if($request->url )
        {
            return view($request->url, ['registro' => $registro]);
        }
     
        
        return view("me", ['registro' => $registro]);
    }

    

    
}
