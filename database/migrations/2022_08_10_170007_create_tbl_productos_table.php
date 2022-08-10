<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_productos', function (Blueprint $table) {
            $table->bigIncrements('COD_PRODUCTO');
            $table->string('NOMBRE', 60);
            $table->string('DESCRIPCION', 100);
            $table->unsignedBigInteger('COD_MEDIDA');
            $table->unsignedBigInteger('COD_CATEGORIA');
            $table->integer('CANTIDAD');
            $table->integer('PRECIO_DE_VENTA');
            $table->string('CREADO_POR', 40);
            $table->string('MODIFICADO_POR', 40);
            $table->timestamp('FEC_CREACION')->nullable();
            $table->timestamp('FEC_MODIFICACION')->nullable();
            
            $table->foreign('COD_MEDIDA', 'medida_id')->references('COD_MEDIDA')->on('tbl_medidas');
            $table->foreign('COD_CATEGORIA', 'tbl_productos_categoria_id_foreign')->references('COD_CATEGORIA')->on('tbl_categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_productos');
    }
}
