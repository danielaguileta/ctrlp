<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblMedidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_medidas', function (Blueprint $table) {
            $table->bigIncrements('COD_MEDIDA');
            $table->string('DESCRIPCION', 50);
            $table->string('CREADO_POR', 40);
            $table->string('MODIFICADO_POR', 40)->nullable();
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
        Schema::dropIfExists('tbl_medidas');
    }
}
