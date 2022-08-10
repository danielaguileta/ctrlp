<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPuestosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_puestos', function (Blueprint $table) {
            $table->bigIncrements('COD_PUESTO');
            $table->unsignedBigInteger('COD_DEPARTAMENTO')->index('tbl_puestos_departamento_id_foreign');
            $table->string('DESCRIPCION', 50);
            $table->string('CREADO_POR', 40);
            $table->string('MODIFICADO_POR', 40);
            $table->timestamp('FEC_CREACION')->nullable();
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
        Schema::dropIfExists('tbl_puestos');
    }
}
