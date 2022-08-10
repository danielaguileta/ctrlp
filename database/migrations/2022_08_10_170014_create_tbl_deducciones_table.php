<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblDeduccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_deducciones', function (Blueprint $table) {
            $table->increments('COD_DEDUCCION');
            $table->unsignedInteger('COD_PERSONA');
            $table->string('FECHA_EFECTIVA', 45)->nullable();
            $table->string('MONTO_DEDUCIR', 45)->nullable();
            $table->string('DESCRIPCION_DEDUCCION', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_deducciones');
    }
}
