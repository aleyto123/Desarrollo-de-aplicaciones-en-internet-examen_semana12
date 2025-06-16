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
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id(); // id autoincremental
            $table->string('nombre');
            $table->string('tipo'); // Perro, Gato, etc.
            $table->integer('edad'); // en años
            $table->string('raza');
            $table->decimal('peso', 5, 2); // en kilogramos
            $table->date('fecha_adopcion'); // fecha de adopción
            $table->timestamps(); // created_at y updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mascotas');
    }
};
