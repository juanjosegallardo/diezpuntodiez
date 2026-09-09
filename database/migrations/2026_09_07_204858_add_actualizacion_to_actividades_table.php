<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('actividades', function (Blueprint $table) {
            $table->timestamp('fecha_entrada')->nullable;
            $table->integer('duracion')->nullable();
            $table->string('semestre')->nullable();
            $table->string('grupo')->nullable();
            $table->string('carrera')->nullable();
            $table->string('asignatura')->nullable();
            $table->string('equipo')->nullable();
            $table->string('observaciones')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('actividades', function (Blueprint $table) {
            $table->dropColumn([
                'fecha_entrada',
                'duracion',
                'semestre',
                'grupo',
                'carrera',
                'asignatura',
                'equipo',
                'observaciones',
            ]);
        });
    }
};