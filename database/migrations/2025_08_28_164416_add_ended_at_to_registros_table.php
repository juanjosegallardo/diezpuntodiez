<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('registros', function (Blueprint $table) {
            $table->dateTime("ended_at")->nullable();
        });
        
        DB::table('registros')->update([
            'ended_at' => DB::raw("DATE_ADD(created_at, INTERVAL duracion MINUTE)")
        ]);

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('registros', function (Blueprint $table) {
            $table->dropColumn("ended_at");
        });
        
    }
};
