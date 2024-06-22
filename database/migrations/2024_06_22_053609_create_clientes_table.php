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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombreCompleto');
            $table->string('telefono')->unique();
            $table->string('email')->unique();
            $table->string('direccion');
            $table->string('genero');
            $table->date('fechaNacimiento')->nullable();
            $table->string('formaPago')->nullable();     
            $table->string('estadoCliente')->default('activo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
