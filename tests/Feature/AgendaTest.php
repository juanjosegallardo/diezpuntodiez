<?php

namespace Tests\Feature;

use Carbon\CarbonImmutable;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class AgendaTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        config(['database.default' => 'sqlite', 'database.connections.sqlite.database' => ':memory:']);
        DB::purge('sqlite');
        Schema::create('actividades', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('profesor')->nullable();
            $table->dateTime('fecha_entrada')->nullable();
            $table->integer('duracion')->nullable();
            $table->string('url')->nullable();
            $table->softDeletes();
        });
        CarbonImmutable::setTestNow(CarbonImmutable::parse('2026-09-10 08:00:00', 'America/Mexico_City'));
    }

    protected function tearDown(): void
    {
        CarbonImmutable::setTestNow();
        parent::tearDown();
    }

    private function activity(string $name, ?string $start, ?int $duration = 50, array $extra = []): void
    {
        DB::table('actividades')->insert(array_merge([
            'nombre' => $name,
            'profesor' => 'Docente de prueba',
            'fecha_entrada' => $start,
            'duracion' => $duration,
            'url' => 'https://example.test/examen-no-publicar',
        ], $extra));
    }

    public function test_it_lists_only_today_in_time_order_without_exam_links(): void
    {
        $this->activity('Siguiente examen', '2026-09-10 08:40:00');
        $this->activity('Actividad en curso', '2026-09-10 07:50:00');
        $this->activity('Primera sesión', '2026-09-10 07:00:00');
        $this->activity('Ayer', '2026-09-09 09:00:00');
        $this->activity('Mañana', '2026-09-11 00:00:00');
        $this->activity('Sin fecha', null);
        $this->activity('Eliminada', '2026-09-10 09:30:00', 50, ['deleted_at' => '2026-09-10 07:00:00']);

        $response = $this->getJson('/api/agenda');
        $response->assertOk()->assertJsonCount(3, 'actividades')
            ->assertJsonPath('fecha', '2026-09-10')
            ->assertJsonPath('actividades.0.actividad', 'Primera sesión')
            ->assertJsonPath('actividades.0.estado', 'finalizada')
            ->assertJsonPath('actividades.1.estado', 'en_curso')
            ->assertJsonPath('actividades.2.estado', 'proxima')
            ->assertJsonPath('actividades.2.hora_entrada', '08:40')
            ->assertJsonPath('actividades.2.profesor', 'Docente de prueba')
            ->assertJsonPath('actividades.2.duracion', 50);
        $this->assertArrayNotHasKey('url', $response->json('actividades.0'));
        $this->assertStringContainsString('no-store', $response->headers->get('Cache-Control'));
    }

    public function test_it_uses_the_campus_day_when_the_utc_day_is_different(): void
    {
        CarbonImmutable::setTestNow(CarbonImmutable::parse('2026-09-11 02:00:00', 'UTC'));
        $this->activity('Última sesión', '2026-09-10 23:00:00');
        $this->activity('Otro día', '2026-09-11 00:00:00');
        $this->getJson('/api/agenda')->assertOk()->assertJsonPath('fecha', '2026-09-10')
            ->assertJsonCount(1, 'actividades')->assertJsonPath('actividades.0.actividad', 'Última sesión');
    }

    public function test_start_is_inclusive_and_end_is_exclusive(): void
    {
        $this->activity('Comienza ahora', '2026-09-10 08:00:00');
        $this->activity('Terminó ahora', '2026-09-10 07:10:00');
        $this->getJson('/api/agenda')->assertOk()
            ->assertJsonPath('actividades.0.estado', 'finalizada')
            ->assertJsonPath('actividades.1.estado', 'en_curso');
    }

    public function test_missing_duration_is_not_reported_as_a_current_session(): void
    {
        $this->activity('Por confirmar', '2026-09-10 07:00:00', null, ['profesor' => null]);
        $this->getJson('/api/agenda')->assertOk()
            ->assertJsonPath('actividades.0.duracion', null)
            ->assertJsonPath('actividades.0.estado', 'sin_duracion');
    }

    public function test_an_empty_day_returns_an_empty_agenda(): void
    {
        $this->getJson('/api/agenda')->assertOk()->assertJsonPath('actividades', []);
    }

    public function test_database_failure_is_not_reported_as_an_empty_day(): void
    {
        Schema::drop('actividades');
        $this->getJson('/api/agenda')->assertStatus(503)
            ->assertExactJson(['message' => 'La agenda no está disponible en este momento.']);
    }
}
