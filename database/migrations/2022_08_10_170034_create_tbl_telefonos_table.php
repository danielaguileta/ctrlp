<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblTelefonosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_telefonos', function (Blueprint $table) {
            $table->increments('COD_TEL');
            $table->string('NUM_TELEFONO', 45)->nullable();
            $table->string('CREADO_POR', 45)->nullable();
            $table->string('MODIFICADO_POR', 45)->nullable();
            $table->timestamp('FEC_CREACION')->nullable();
            $table->timestamp('FEC_MODIFICACION')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_telefonos');
    }
}
