<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblNominasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_nominas', function (Blueprint $table) {
            $table->increments('COD_NOMINA');
            $table->unsignedInteger('COD_PERSONA');
            $table->integer('DIAS_LABORADOS')->nullable();
            $table->decimal('MONTO_DEVENGADO', 11, 2)->nullable();
            $table->decimal('MONTO_NETO', 11, 2)->nullable();
            $table->unsignedInteger('COD_DEDUCCION');
            
            $table->foreign('COD_DEDUCCION', 'fk_tbl_nomina_cod_cod_deduccion')->references('COD_DEDUCCION')->on('tbl_deducciones')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('COD_PERSONA', 'fk_tbl_nomina_cod_cod_persona')->references('COD_PERSONA')->on('tbl_personas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_nominas');
    }
}
