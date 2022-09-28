<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroReporteActividadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_reporte_actividades', function (Blueprint $table) {
            $table->id();
            $table->string('reporteActividadesCodigo')->nullable();
            
            $table->string('reporteActividadesNumEmpleadoElaboro')->nullable();
            $table->string('reporteActividadesNombreEmpleadoElaboro')->nullable();
            $table->string('reporteActividadesCategoria')->nullable();
            $table->string('reporteActividadesNumEco')->nullable();
            $table->string('reporteActividadesEquipo')->nullable();
            $table->string('reporteActividadesModelo')->nullable();
            $table->string('reporteActividadesVerificacion')->nullable();
            $table->string('reporteActividadesServicio')->nullable();
            $table->string('reporteActividadesPreventivo')->nullable();
            $table->string('reporteActividadesCorrectivo')->nullable();
            $table->string('reporteActividadesMarca')->nullable();
            $table->string('reporteActividadesUbicacion')->nullable();
            $table->string('reporteActividadesNivelCombustible')->nullable();
            $table->string('reporteActividadesDiagnostico')->nullable();
            $table->date('reporteActividadesFechaEntrada')->nullable();
            $table->date('reporteActividadesFechaSalida')->nullable();
            $table->text('reporteActividadesResultado')->nullable();
            // $registroCheckListProceso->clp_1 = $request->input('clp_1', 'No');
            $table->string('reporteActividadesVerificacion_1')->nullable();
            $table->string('reporteActividadesVerificacion_2')->nullable();
            $table->string('reporteActividadesVerificacion_3')->nullable();
            $table->string('reporteActividadesVerificacion_4')->nullable();
            $table->string('reporteActividadesVerificacion_5')->nullable();
            $table->string('reporteActividadesVerificacion_6')->nullable();
            $table->string('reporteActividadesVerificacion_7')->nullable();
            $table->string('reporteActividadesVerificacion_8')->nullable();
            $table->string('reporteActividadesVerificacion_9')->nullable();
            $table->string('reporteActividadesVerificacion_10')->nullable();
            $table->string('reporteActividadesVerificacion_11')->nullable();
            $table->string('reporteActividadesVerificacion_12')->nullable();
            $table->string('reporteActividadesVerificacion_13')->nullable();
            $table->string('reporteActividadesVerificacion_14')->nullable();
            $table->string('reporteActividadesVerificacion_15')->nullable();
            $table->string('reporteActividadesVerificacion_16')->nullable();
            $table->string('reporteActividadesVerificacion_17')->nullable();
            $table->string('reporteActividadesVerificacion_18')->nullable();
            $table->string('reporteActividadesVerificacion_19')->nullable();
            $table->string('reporteActividadesVerificacion_20')->nullable();
            $table->string('reporteActividadesVerificacion_21')->nullable();
            $table->string('reporteActividadesVerificacion_22')->nullable();
            $table->string('reporteActividadesVerificacion_23')->nullable();
            $table->string('reporteActividadesVerificacion_24')->nullable();

            $table->string('reporteActividadesCategoria1')->nullable();
            $table->string('reporteActividadesCantidad1')->nullable();
            $table->string('reporteActividadesCategoria2')->nullable();
            $table->string('reporteActividadesCantidad2')->nullable();
            $table->string('reporteActividadesCategoria3')->nullable();
            $table->string('reporteActividadesCantidad3')->nullable();
            $table->string('reporteActividadesCategoria4')->nullable();
            $table->string('reporteActividadesCantidad4')->nullable();
            $table->string('reporteActividadesCategoria5')->nullable();
            $table->string('reporteActividadesCantidad5')->nullable();

            $table->string('reporteActividadesMaquinaria1')->nullable();
            $table->string('reporteActividadesEconomico1')->nullable();
            $table->string('reporteActividadesMaquinaria2')->nullable();
            $table->string('reporteActividadesEconomico2')->nullable();
            $table->string('reporteActividadesMaquinaria3')->nullable();
            $table->string('reporteActividadesEconomico3')->nullable();
            $table->string('reporteActividadesMaquinaria4')->nullable();
            $table->string('reporteActividadesEconomico4')->nullable();
            $table->string('reporteActividadesMaquinaria5')->nullable();
            $table->string('reporteActividadesEconomico5')->nullable();
            $table->string('reporteActividadesMaquinaria6')->nullable();
            $table->string('reporteActividadesEconomico6')->nullable();
            $table->string('reporteActividadesMaquinaria7')->nullable();
            $table->string('reporteActividadesEconomico7')->nullable();

            $table->text('reporteActividadesActividad1')->nullable();
            $table->text('reporteActividadesRecurso1')->nullable();
            $table->text('reporteActividadesActividad2')->nullable();
            $table->text('reporteActividadesRecurso2')->nullable();
            $table->text('reporteActividadesActividad3')->nullable();
            $table->text('reporteActividadesRecurso3')->nullable();
            $table->text('reporteActividadesActividad4')->nullable();
            $table->text('reporteActividadesRecurso4')->nullable();
            $table->text('reporteActividadesActividad5')->nullable();
            $table->text('reporteActividadesRecurso5')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registro_reporte_actividades');
    }
}
