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

        //a la espera
        Schema::create('familias', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('folio');
            // $table->bigInteger('persona_id');
            $table->unsignedBigInteger('persona_id');
            $table->foreign('persona_id')->references('id')->on('personas');


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
        Schema::dropIfExists('familias');
    }
};
