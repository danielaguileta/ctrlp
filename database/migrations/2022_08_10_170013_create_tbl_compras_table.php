<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_compras', function (Blueprint $table) {
            $table->bigIncrements('COD_COMPRA');
            $table->unsignedBigInteger('COD_PROVEEDOR');
            $table->string('NO_FACTURA', 30);
            $table->dateTime('FEC_COMPRA')->nullable();
            $table->unsignedBigInteger('COD_FORMA_PAGO');
            $table->string('CREADO_POR', 40);
            $table->string('MODIFICADO_POR', 40)->nullable();
            $table->timestamp('FEC_CREACION')->nullable();
            $table->timestamp('FEC_MODIFICACION')->nullable();
            
            $table->foreign('COD_PROVEEDOR', 'fk_proveedor_id')->references('COD_PROVEEDOR')->on('tbl_proveedores')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('COD_FORMA_PAGO', 'meto_pago')->references('COD_FORMA_PAGO')->on('tbl_forma_pago');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_compras');
    }
}
