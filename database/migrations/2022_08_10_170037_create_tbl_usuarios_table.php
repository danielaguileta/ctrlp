<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_usuarios', function (Blueprint $table) {
            $table->bigIncrements('COD_USUARIO');
            $table->unsignedInteger('COD_PERSONA');
            $table->unsignedBigInteger('COD_ROL');
            $table->string('NOMBRE_USUARIO', 30);
            $table->string('CORREO', 30)->unique('tbl_usuarios_email_unique');
            $table->string('PASSWORD', 8);
            $table->enum('ESTADO_USUARIO', ['activo', 'inactivo']);
            $table->timestamp('FEC_CREACION')->nullable();
            $table->timestamp('FEC_MODIFICACION')->nullable();
            
            $table->foreign('COD_ROL', 'rol_id')->references('COD_ROL')->on('tbl_roles');
            $table->foreign('COD_PERSONA', 'tbl_usuarios_persona_id')->references('COD_PERSONA')->on('tbl_personas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_usuarios');
    }
}
