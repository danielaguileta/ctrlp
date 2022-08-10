<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblDescargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_descargas', function (Blueprint $table) {
            $table->bigIncrements('COD_DESCARGA');
            $table->unsignedBigInteger('COD_PRODUCTO')->unique('PRODUCTO_ID_UNIQUE');
            $table->string('MOTIVO', 45);
            $table->string('AUTORIZADO', 45);
            $table->timestamp('FEC_INGRESO')->nullable();
            
            $table->foreign('COD_PRODUCTO', 'fk_TBL_DESCARGAS_COD_PRODUCTO')->references('COD_PRODUCTO')->on('tbl_productos')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_descargas');
    }
}
