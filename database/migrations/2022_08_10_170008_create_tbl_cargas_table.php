<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblCargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_cargas', function (Blueprint $table) {
            $table->bigIncrements('COD_CARGA');
            $table->unsignedBigInteger('COD_PRODUCTO');
            $table->string('MOTIVO', 45);
            $table->string('AUTORIZADO', 45);
            $table->timestamp('FEC_INGRESO')->nullable();
            
            $table->foreign('COD_PRODUCTO', 'fk_TBL_CARGAS_COD_PRODUCTO')->references('COD_PRODUCTO')->on('tbl_productos')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_cargas');
    }
}
