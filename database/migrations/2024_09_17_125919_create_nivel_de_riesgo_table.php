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
        Schema::create('nivel_de_riesgo', function (Blueprint $table) {
            $table->string('codNivelRiesgo'); // Define codNivelRiesgo como clave primaria
            $table->string('descripcion'); // Descripción del nivel de riesgo
            $table->timestamps(); // Agrega created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nivel_de_riesgo');
    }
};
