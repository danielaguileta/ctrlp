<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_personas', function (Blueprint $table) {
            $table->increments('COD_PERSONA');
            $table->string('NOMBRES', 45);
            $table->string('APELLIDOS', 45);
            $table->string('DNI', 45);
            $table->enum('SEXO', ['f', 'm']);
            $table->string('DIRECCION', 45);
            $table->enum('ESTADO_CIVIL', ['s', 'c', 'ul', 'd', 'v']);
            $table->date('FECHA_NACIMIENTO');
            $table->timestamp('FEC_CREACION')->nullable();
            $table->timestamp('FEC_MODIFICACION')->nullable();
            $table->string('CREADO_POR', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_personas');
    }
}
