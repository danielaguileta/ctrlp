<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_clientes', function (Blueprint $table) {
            $table->bigIncrements('COD_CLIENTE');
            $table->unsignedInteger('COD_PERSONA');
            $table->enum('ESTADO_CLIENTE', ['activo', 'inactivo'])->nullable();
            $table->string('CREADO_POR', 40);
            $table->string('MODIFICADO_POR', 40)->nullable();
            $table->timestamp('FEC_CREACION')->nullable();
            $table->timestamp('FEC_MODIFICACION')->nullable();
            
            $table->foreign('COD_PERSONA', 'tbl_clientes_cod_persona')->references('COD_PERSONA')->on('tbl_personas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_clientes');
    }
}
