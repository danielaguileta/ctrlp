<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPreguntaUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_pregunta_usuarios', function (Blueprint $table) {
            $table->increments('COD_PREGUNTA_USUARIO');
            $table->unsignedInteger('COD_PREGUNTA');
            $table->unsignedBigInteger('COD_USUARIO');
            $table->string('RESPUESTA');
            $table->timestamp('FEC_CREACION')->default('current_timestamp()');
            $table->timestamp('FEC_MODIFICACION')->nullable();
            
            $table->foreign('COD_PREGUNTA', 'TBL_PREG')->references('COD_PREGUNTA')->on('tbl_preguntas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('COD_USUARIO', 'TBL_PREG_USUARIOS')->references('COD_USUARIO')->on('tbl_usuarios')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_pregunta_usuarios');
    }
}
