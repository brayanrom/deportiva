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
        Schema::create('pagos', function (Blueprint $table) {
            $table->id();
            // $table->integer('folio_id');

            $table->unsignedBigInteger('folio_id'); 
            $table->foreign('folio_id')->references('id')->on('familias');

            $table->double('pagado',8,2);
            $table->integer('mes_a_pagar');
            $table->integer('año_a_pagar');
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
        Schema::dropIfExists('pagos');
    }
};
