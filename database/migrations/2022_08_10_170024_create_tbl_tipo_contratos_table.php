<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblTipoContratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_tipo_contratos', function (Blueprint $table) {
            $table->bigIncrements('COD_TIPO_CONTRATO');
            $table->string('CONTRATO', 50);
            $table->string('CREADO_POR', 40);
            $table->string('MODIFICADO_POR', 40);
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
        Schema::dropIfExists('tbl_tipo_contratos');
    }
}
