<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPertelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_pertel', function (Blueprint $table) {
            $table->unsignedInteger('COD_PERSONA');
            $table->unsignedInteger('COD_TEL');
            $table->string('CREADO_POR', 45)->nullable();
            $table->timestamp('FEC_CREACION')->nullable();
            
            $table->foreign('COD_PERSONA', 'tblpertel_cod_persona')->references('COD_PERSONA')->on('tbl_personas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('COD_TEL', 'tblpertel_cod_telefono')->references('COD_TEL')->on('tbl_telefonos')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_pertel');
    }
}
