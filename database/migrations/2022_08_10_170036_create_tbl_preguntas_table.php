<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPreguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_preguntas', function (Blueprint $table) {
            $table->increments('COD_PREGUNTA');
            $table->string('PREGUNTA');
            $table->timestamp('FEC_CREACION')->default('current_timestamp()');
            $table->timestamp('FEC_MODIFICACION')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_preguntas');
    }
}
