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
        DB::table('cursos')->insert([
            'codigo'=>'40622367',
            'nombre' => 'Matematica',
            'ciclo' => '4to',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('cursos')
        ->where('codigo', '40622367')
        ->where('nombre', 'Matematica')
        ->where('ciclo', '4to')
        ->delete();
    }
};
