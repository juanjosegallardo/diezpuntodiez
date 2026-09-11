<?php

namespace App\Http\Controllers;

use App\Models\Actividad;
use Carbon\CarbonImmutable;
use Illuminate\Database\QueryException;
use Illuminate\Http\JsonResponse;

class AgendaController extends Controller
{
    public function __invoke(): JsonResponse
    {
        // Las fechas de registro se capturan con la hora local del plantel.
        $now = CarbonImmutable::now('America/Mexico_City');

        try {
            $activities = Actividad::query()
                ->select(['id', 'nombre', 'profesor', 'fecha_entrada', 'duracion'])
                ->where('fecha_entrada', '>=', $now->startOfDay()->toDateTimeString())
                ->where('fecha_entrada', '<', $now->addDay()->startOfDay()->toDateTimeString())
                ->orderBy('fecha_entrada')
                ->orderBy('id')
                ->get();
        } catch (QueryException $exception) {
            report($exception);

            return response()->json([
                'message' => 'La agenda no está disponible en este momento.',
            ], 503)->header('Cache-Control', 'no-store');
        }

        return response()->json([
            'fecha' => $now->toDateString(),
            'zona_horaria' => 'America/Mexico_City',
            'actualizado_en' => $now->toIso8601String(),
            'actividades' => $activities->map(function (Actividad $activity) use ($now) {
                $start = CarbonImmutable::parse($activity->fecha_entrada, 'America/Mexico_City');
                $duration = is_numeric($activity->duracion) && (int) $activity->duracion > 0
                    ? (int) $activity->duracion : null;

                if ($start->isAfter($now)) {
                    $state = 'proxima';
                } elseif ($duration === null) {
                    $state = 'sin_duracion';
                } else {
                    $state = $now->isBefore($start->addMinutes($duration)) ? 'en_curso' : 'finalizada';
                }

                return [
                    'id' => $activity->id,
                    'actividad' => $activity->nombre,
                    'profesor' => $activity->profesor,
                    'hora_entrada' => $start->format('H:i'),
                    'duracion' => $duration,
                    'estado' => $state,
                ];
            }),
        ])->header('Cache-Control', 'no-store');
    }
}
