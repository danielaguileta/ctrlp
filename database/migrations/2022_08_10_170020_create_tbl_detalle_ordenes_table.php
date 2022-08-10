<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblDetalleOrdenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_detalle_ordenes', function (Blueprint $table) {
            $table->bigIncrements('COD_DETALLE_ORDEN');
            $table->unsignedBigInteger('COD_ORDEN');
            $table->unsignedBigInteger('COD_PRODUCTO');
            $table->integer('CANTIDAD');
            $table->string('CREADO_POR', 40);
            $table->string('MODIFICADO_POR', 40);
            $table->timestamp('FEC_CREACION')->nullable();
            $table->timestamp('FEC_MODIFICACION')->nullable();
            
            $table->foreign('COD_PRODUCTO', 'tbl_detalle_orden_cod_producto_foreign')->references('COD_PRODUCTO')->on('tbl_productos');
            $table->foreign('COD_ORDEN', 'tbl_detalle_orden_orden_id_foreign')->references('COD_ORDEN')->on('tbl_ordenes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_detalle_ordenes');
    }
}
