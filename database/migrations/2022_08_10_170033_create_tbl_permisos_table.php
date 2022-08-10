<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblPermisosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_permisos', function (Blueprint $table) {
            $table->increments('COD_PERMISO');
            $table->unsignedBigInteger('COD_ROL');
            $table->unsignedInteger('COD_OBJ');
            $table->integer('INSERTAR')->nullable();
            $table->integer('BORRAR')->nullable();
            $table->integer('ACTUALIZAR')->nullable();
            $table->integer('CONSULTA')->nullable();
            $table->string('CREADO_POR', 40)->nullable();
            $table->timestamp('FEC_CREACION')->nullable();
            $table->timestamp('FEC_MODIFICACION')->nullable();
            
            $table->foreign('COD_OBJ', 'TBL_OBJETOS')->references('COD_OBJ')->on('tbl_objetos')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('COD_ROL', 'TBL_ROLES')->references('COD_ROL')->on('tbl_roles')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_permisos');
    }
}
