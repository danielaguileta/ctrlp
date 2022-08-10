<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblDetalleComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_detalle_compras', function (Blueprint $table) {
            $table->bigIncrements('COD_DETALLE_COMPRA');
            $table->unsignedBigInteger('COD_COMPRA');
            $table->unsignedBigInteger('COD_PRODUCTO');
            $table->string('CANTIDAD', 125);
            $table->string('PRECIO_COMPRA', 125);
            $table->string('CREADO_POR', 40)->nullable();
            $table->string('MODIFICADO_POR', 40)->nullable();
            $table->timestamp('FEC_CREACION')->nullable();
            $table->timestamp('FEC_MODIFICACION')->nullable();
            
            $table->foreign('COD_COMPRA', 'fk_compra_id')->references('COD_COMPRA')->on('tbl_compras')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('COD_PRODUCTO', 'fk_producto_id')->references('COD_PRODUCTO')->on('tbl_productos')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_detalle_compras');
    }
}
