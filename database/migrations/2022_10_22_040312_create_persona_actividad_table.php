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
        Schema::create('persona_actividad', function (Blueprint $table) {
            $table->id();

            // $table->integer('persona_id');
            $table->unsignedBigInteger('persona_id');
            $table->foreign('persona_id')->references('id')->on('personas');

            // $table->integer('actividad_id');
            $table->unsignedBigInteger('actividad_id');
            $table->foreign('actividad_id')->references('id')->on('actividad');

            // $table->integer('fechas_id');
            $table->unsignedBigInteger('fechas_id');
            $table->foreign('fechas_id')->references('id')->on('fecha');

            // $table->integer('pagos_id');
            $table->unsignedBigInteger('pagos_id');
            $table->foreign('pagos_id')->references('id')->on('pagos');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persona_actividad');
    }
};
