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
        Schema::create('productos', function (Blueprint $table) {
            $table->increments("id");
            $table->string('nombre');
            $table->integer('cantidad')->unique();
            $table->double('precio')->unique();
            $table->string('descripcion');
            $table->string('marca');
            $table->date('agregado_fecha')->nullable();
            $table->date('fecha_vencimiento')->nullable();     
            $table->string('categoria')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
