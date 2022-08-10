<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblOrdenesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_ordenes', function (Blueprint $table) {
            $table->bigIncrements('COD_ORDEN');
            $table->string('NUMERO_ORDEN', 50);
            $table->string('DIRECCION_ENTREGA', 150);
            $table->date('FECHA_ORDEN');
            $table->unsignedBigInteger('COD_ESTADO_ORDEN');
            $table->unsignedBigInteger('COD_CLIENTE');
            $table->string('CREADO_POR', 40);
            $table->string('MODIFICADO_POR', 40);
            $table->timestamp('FEC_CREACION')->nullable();
            $table->timestamp('FEC_MODIFICACION')->nullable();
            
            $table->foreign('COD_ESTADO_ORDEN', 'cod_estado_orden')->references('COD_ESTADO_ORDEN')->on('tbl_estado_ordenes')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('COD_CLIENTE', 'tbl_ordenes_cliente_id_foreign')->references('COD_CLIENTE')->on('tbl_clientes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_ordenes');
    }
}
