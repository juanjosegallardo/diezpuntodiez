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
        Schema::table('datos', function (Blueprint $table) {
            //
           $table->boolean('mostrar_texto')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('datos', function (Blueprint $table) {
            //
            $table->dropColumn("mostrar_texto");
        });
    }
};
