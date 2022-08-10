<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblDetalleVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_detalle_ventas', function (Blueprint $table) {
            $table->bigInteger('COD_DETALLE_VENTA')->primary();
            $table->unsignedBigInteger('COD_VENTA');
            $table->unsignedBigInteger('COD_PRODUCTO');
            $table->integer('CANTIDAD')->nullable();
            $table->decimal('PRECIO', 11, 2)->nullable();
            $table->decimal('DESCUENTO', 11, 2)->nullable();
            $table->string('CREADO_POR', 40)->nullable();
            $table->string('MODIFICADO_POR', 40)->nullable();
            $table->timestamp('FEC_CREACION')->nullable();
            $table->timestamp('FEC_MODIFICACION')->nullable();
            
            $table->foreign('COD_PRODUCTO', 'fk_detalle_venta_producto_id')->references('COD_PRODUCTO')->on('tbl_productos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('COD_VENTA', 'fk_venta_id')->references('COD_VENTA')->on('tbl_ventas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_detalle_ventas');
    }
}
