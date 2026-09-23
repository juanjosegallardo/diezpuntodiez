<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('registros', function (Blueprint $table) {
            $table->renameColumn('actividad', 'actividad_legacy');
        });
    }

    public function down(): void
    {
        Schema::table('registros', function (Blueprint $table) {
            $table->renameColumn('actividad_legacy', 'actividad');
        });
    }
};
