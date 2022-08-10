<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblProveedoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_proveedores', function (Blueprint $table) {
            $table->bigIncrements('COD_PROVEEDOR');
            $table->string('NOMBRE', 50);
            $table->string('DIRECCION', 100);
            $table->string('IDENTIFICACION', 20)->unique('tbl_proveedores_identificacion_unique');
            $table->string('TELEFONO', 20)->nullable();
            $table->string('CELULAR', 20);
            $table->string('CORREO', 20)->unique('tbl_proveedores_correo_unique');
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
        Schema::dropIfExists('tbl_proveedores');
    }
}
