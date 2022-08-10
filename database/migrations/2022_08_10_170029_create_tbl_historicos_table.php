<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblHistoricosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_historicos', function (Blueprint $table) {
            $table->increments('COD_HISTORICO');
            $table->unsignedInteger('COD_REPORTE');
            $table->timestamp('FEC_CREACION')->default('current_timestamp()');
            
            $table->foreign('COD_REPORTE', 'TBL_REPORTE')->references('COD_REPORTE')->on('tbl_reportes')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_historicos');
    }
}
