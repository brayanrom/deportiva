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
        Schema::create('persona_actividads', function (Blueprint $table) {
            $table->id();
            $table->integer('persona_id');
            $table->integer('actividad_id');
            $table->integer('fechas_id');
            $table->integer('pagos_id');
                        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persona_actividads');
    }
};
