<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_ventas', function (Blueprint $table) {
            $table->bigIncrements('COD_VENTA');
            $table->unsignedBigInteger('COD_CLIENTE');
            $table->unsignedBigInteger('COD_FORMA_PAGO');
            $table->string('NO_FACTURA', 30);
            $table->dateTime('FEC_VENTA')->nullable();
            $table->decimal('ISV', 4, 2)->nullable();
            $table->enum('ESTADO_VENTA', ['activo', 'inactivo']);
            $table->string('CREADO_POR', 40)->nullable();
            $table->string('MODIFICADO_POR', 40)->nullable();
            $table->timestamp('FEC_CREACION')->nullable();
            $table->timestamp('FEC_MODIFICACION')->nullable();
            
            $table->foreign('COD_CLIENTE', 'COD_CLIENTE')->references('COD_CLIENTE')->on('tbl_clientes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('COD_FORMA_PAGO', 'met_pago_id')->references('COD_FORMA_PAGO')->on('tbl_forma_pago');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_ventas');
    }
}
