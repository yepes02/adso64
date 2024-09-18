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
        Schema::create('tipo_de_contrato', function (Blueprint $table) {
            $table->string('codTipoContrato'); // Define codTipoContrato como clave primaria
            $table->string('DescripcionTipoContrato'); // Descripción del tipo de contrato
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_de_contrato');
    }
};
