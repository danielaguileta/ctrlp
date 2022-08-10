<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_empleados', function (Blueprint $table) {
            $table->bigIncrements('COD_EMPLEADO');
            $table->unsignedInteger('COD_PERSONA');
            $table->unsignedBigInteger('PUESTOS_ID');
            $table->unsignedBigInteger('TIPO_CONTRATO_ID');
            $table->unsignedBigInteger('COD_TIPO_PAGO_PLANILLA');
            $table->date('FECHA_INGRESO');
            $table->date('FECHA_EGRESO')->nullable();
            $table->decimal('SALARIO', 11, 2);
            $table->enum('ESTADO_EMPLEADO', ['activo', 'inactivo'])->index('tbl_empleados_estado_empleado_id_foreign');
            $table->string('CREADO_POR', 40);
            $table->string('MODIFICADO_POR', 40)->nullable();
            $table->timestamp('FEC_CREACION')->default('current_timestamp()');
            $table->timestamp('FEC_MODIFICACION')->nullable();
            
            $table->foreign('COD_PERSONA', 'COD_PERSONA')->references('COD_PERSONA')->on('tbl_personas')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('PUESTOS_ID', 'tbl_empleados_puestos_id_foreign')->references('COD_PUESTO')->on('tbl_puestos');
            $table->foreign('TIPO_CONTRATO_ID', 'tbl_empleados_tipo_contrato_id_foreign')->references('COD_TIPO_CONTRATO')->on('tbl_tipo_contratos');
            $table->foreign('COD_TIPO_PAGO_PLANILLA', 'tipo_pago')->references('COD_TIPO_PAGO_PLANILLA')->on('tbl_tipo_pago_planillas')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_empleados');
    }
}
