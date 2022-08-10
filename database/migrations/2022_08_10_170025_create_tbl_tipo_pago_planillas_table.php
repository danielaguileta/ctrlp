<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblTipoPagoPlanillasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_tipo_pago_planillas', function (Blueprint $table) {
            $table->bigIncrements('COD_TIPO_PAGO_PLANILLA');
            $table->string('DESCRIPCION', 30);
            $table->string('CREADO_POR', 25);
            $table->string('MODIFICADO_POR', 25)->nullable();
            $table->timestamp('FEC_CREACION')->default('current_timestamp()');
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
        Schema::dropIfExists('tbl_tipo_pago_planillas');
    }
}
