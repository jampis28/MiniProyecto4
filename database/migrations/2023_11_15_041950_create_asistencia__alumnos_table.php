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
        Schema::create('asistencia_alumnos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('alumnocurso_id');
            $table->foreign('alumnocurso_id')->references('id')->on('alumno_cursos');
            $table->unsignedBigInteger('asistencia_id');
            $table->foreign('asistencia_id')->references('id')->on('asistencias');
            $table->date('fecha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('asistencia__alumnos');
    }
};
