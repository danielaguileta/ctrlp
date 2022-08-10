<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblReportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_reportes', function (Blueprint $table) {
            $table->increments('COD_REPORTE');
            $table->string('NOMBRE_REPORTE', 45);
            $table->string('TIPO_REPORTE', 45);
            $table->date('FEC_INICIAL');
            $table->date('FEC_FINAL');
            $table->timestamp('FEC_CREACION')->default('current_timestamp()');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_reportes');
    }
}
