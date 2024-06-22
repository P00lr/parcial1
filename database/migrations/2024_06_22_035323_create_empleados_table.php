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
        Schema::create('empleados', function (Blueprint $table) {
            $table->increments("id");
            $table->string('nombreCompleto');
            $table->integer('ci')->unique();
            $table->integer('telefono')->unique();
            $table->date('fechaNacimiento');
            $table->string('email')->unique();//corregido campo unicos
            $table->string('direccion', 255);
            $table->string('cargo');
            $table->double('salario');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
