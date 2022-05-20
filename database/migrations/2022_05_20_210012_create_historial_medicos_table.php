<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial_medicos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('id_paciente');
            $table->unsignedBigInteger('id_receta');
            $table->unsignedBigInteger('id_cita');
            $table->foreign('id_paciente')->references('id')->on("pacientes");
            $table->foreign('id_receta')->references('id')->on("recetas");
            $table->foreign('id_cita')->references('id')->on("citas");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('historial_medicos');
    }
};
