<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroOrdenServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_orden_servicios', function (Blueprint $table) {
            $table->id();

            $table->string('ordenServicioNumEmpleadoElaboro')->nullable();
            $table->string('ordenServicioNombreEmpleadoElaboro')->nullable();
            
            $table->string('ordenServicioEncargado')->nullable();
            $table->string('ordenServicioMecanicoAxiliar')->nullable();

            $table->string('ordenServicioEstado')->nullable();
            $table->string('ordenServicioCodigo')->nullable();

            $table->date('ordenServicioFechaIngreso')->nullable();
            $table->string('ordenServicioMantenimiento')->nullable();
            $table->date('ordenServicioFechaSalida')->nullable();
            $table->string('ordenServicioMarca')->nullable();
            $table->string('ordenServicioModelo')->nullable();
            $table->string('ordenServicioPlacas')->nullable();
            $table->string('ordenServicioKilometraje')->nullable();
            $table->string('ordenServicioHorometro')->nullable();
            $table->string('ordenServicioTipoUnidad')->nullable();
            $table->string('ordenServicioNumEco')->nullable();
            $table->text('ordenServicioDescripcion')->nullable();
            $table->text('ordenServicioDiagnostico')->nullable();
            $table->string('ordenServicioRefacciones')->nullable();

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
        Schema::dropIfExists('registro_orden_servicios');
    }
}
