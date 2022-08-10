<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblBitacorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_bitacoras', function (Blueprint $table) {
            $table->increments('COD_BITACORA');
            $table->string('NOMBRE_TABLA');
            $table->string('CREADO_POR', 45);
            $table->timestamp('FEC_MODIFICACION')->default('current_timestamp()');
            $table->string('MODIFICADO_POR', 45);
            $table->timestamp('FEC_CREACION')->default('current_timestamp()');
            $table->string('ACCION_REALIZADA', 45);
            $table->string('CAMPO1')->nullable();
            $table->string('CAMPO2')->nullable();
            $table->string('CAMPO3')->nullable();
            $table->string('CAMPO4')->nullable();
            $table->string('CAMPO5')->nullable();
            $table->string('CAMPO6')->nullable();
            $table->string('CAMPO7')->nullable();
            $table->string('CAMPO8')->nullable();
            $table->string('CAMPO9')->nullable();
            $table->string('CAMPO10')->nullable();
            $table->string('CAMPO11')->nullable();
            $table->string('CAMPO12')->nullable();
            $table->string('CAMPO13')->nullable();
            $table->string('CAMPO14')->nullable();
            $table->string('CAMPO15')->nullable();
            $table->string('CAMPO16')->nullable();
            $table->string('CAMPO17')->nullable();
            $table->string('CAMPO18')->nullable();
            $table->string('CAMPO19')->nullable();
            $table->string('CAMPO20')->nullable();
            $table->string('CAMPO21')->nullable();
            $table->string('CAMPO22')->nullable();
            $table->string('CAMPO23')->nullable();
            $table->string('CAMPO24')->nullable();
            $table->string('CAMPO25')->nullable();
            $table->string('CAMPO26')->nullable();
            $table->string('CAMPO27')->nullable();
            $table->string('CAMPO28')->nullable();
            $table->string('CAMPO29')->nullable();
            $table->string('CAMPO30')->nullable();
            $table->string('CAMPO31')->nullable();
            $table->string('CAMPO32')->nullable();
            $table->string('CAMPO33')->nullable();
            $table->string('CAMPO34')->nullable();
            $table->string('CAMPO35')->nullable();
            $table->string('CAMPO36')->nullable();
            $table->string('CAMPO37')->nullable();
            $table->string('CAMPO38')->nullable();
            $table->string('CAMPO39')->nullable();
            $table->string('CAMPO40')->nullable();
            $table->string('CAMPO41')->nullable();
            $table->string('CAMPO42')->nullable();
            $table->string('CAMPO43')->nullable();
            $table->string('CAMPO44')->nullable();
            $table->string('CAMPO45')->nullable();
            $table->string('CAMPO46')->nullable();
            $table->string('CAMPO47')->nullable();
            $table->string('CAMPO48')->nullable();
            $table->string('CAMPO49')->nullable();
            $table->string('CAMPO50')->nullable();
            $table->string('CAMPO51')->nullable();
            $table->string('CAMPO52')->nullable();
            $table->string('CAMPO53')->nullable();
            $table->string('CAMPO54')->nullable();
            $table->string('CAMPO55')->nullable();
            $table->string('CAMPO56')->nullable();
            $table->string('CAMPO57')->nullable();
            $table->string('CAMPO58')->nullable();
            $table->string('CAMPO59')->nullable();
            $table->string('CAMPO60')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_bitacoras');
    }
}
