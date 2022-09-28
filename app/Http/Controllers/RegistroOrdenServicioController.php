<?php

namespace App\Http\Controllers;

use App\Models\registroOrdenServicio;
use App\Models\registroReporteActividades;

use Illuminate\Http\Request;

class RegistroOrdenServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registroOrdenServicio = registroOrdenServicio::all();
        return view('registroOrdenServicio.index', compact('registroOrdenServicio'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registroOrdenServicio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $numCodigo = registroOrdenServicio::latest('id')->first();

        if (empty($numCodigo)) {
            $codigo = 1;
        } else {
            $codigo = $numCodigo->id + 1;
        }

        $registroOrdenServicio = new registroOrdenServicio();
        $registroOrdenServicio->ordenServicioEstado = 'Incompleto';
        $registroOrdenServicio->ordenServicioCodigo = $codigo;
        $registroOrdenServicio->ordenServicioNumEmpleadoElaboro = $request->input('ordenServicioNumEmpleadoElaboro');
        $registroOrdenServicio->ordenServicioNombreEmpleadoElaboro = $request->input('ordenServicioNombreEmpleadoElaboro');
        $registroOrdenServicio->ordenServicioEncargado = $request->input('ordenServicioEncargado');
        $registroOrdenServicio->ordenServicioMecanicoAxiliar = $request->input('ordenServicioMecanicoAxiliar');
        $registroOrdenServicio->ordenServicioFechaIngreso = $request->input('ordenServicioFechaIngreso');
        $registroOrdenServicio->ordenServicioMantenimiento = $request->input('ordenServicioMantenimiento');
        $registroOrdenServicio->ordenServicioFechaSalida = $request->input('ordenServicioFechaIngreso');
        $registroOrdenServicio->ordenServicioMarca = $request->input('ordenServicioMarca');
        $registroOrdenServicio->ordenServicioModelo = $request->input('ordenServicioModelo');
        $registroOrdenServicio->ordenServicioPlacas = $request->input('ordenServicioPlacas');
        $registroOrdenServicio->ordenServicioKilometraje = $request->input('ordenServicioKilometraje');
        $registroOrdenServicio->ordenServicioHorometro = '';
        $registroOrdenServicio->ordenServicioTipoUnidad = $request->input('ordenServicioTipoUnidad');
        $registroOrdenServicio->ordenServicioNumEco = $request->input('ordenServicioNumEco');
        $registroOrdenServicio->ordenServicioDescripcion = $request->input('ordenServicioDescripcion');
        $registroOrdenServicio->ordenServicioDiagnostico = '';
        $registroOrdenServicio->ordenServicioRefacciones = '';
        $registroOrdenServicio->save();

        self::registroReporteActividades($request);

        $registroOrdenServicio = registroOrdenServicio::all();

        $registroOrdenServicioIncompleto = registroOrdenServicio::where('ordenServicioEstado', '=', 'Incompleto')->get();
        $registroOrdenServicioCompleto = registroOrdenServicio::where('ordenServicioEstado', '=', 'Completado')->get();

        return view('home', compact('registroOrdenServicio', 'registroOrdenServicioIncompleto', 'registroOrdenServicioCompleto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    function registroReporteActividades(Request $request)
    {
        $registroOrdenServicio = new registroReporteActividades();
        $numCodigo = registroOrdenServicio::latest('id')->first();

        if (empty($numCodigo)) {
            $codigo = 1;
        } else {
            $codigo = $numCodigo->id + 1;
        }

        $registroOrdenServicio->reporteActividadesCodigo = $codigo;

        $registroOrdenServicio->reporteActividadesNumEmpleadoElaboro = $request->input('ordenServicioNumEmpleadoElaboro');
        $registroOrdenServicio->reporteActividadesNombreEmpleadoElaboro = $request->input('ordenServicioNombreEmpleadoElaboro');
        $registroOrdenServicio->reporteActividadesNumEco = $request->input('ordenServicioNumEco');
        $registroOrdenServicio->reporteActividadesCategoria = $request->input('reporteActividadesCategoria');
        $registroOrdenServicio->reporteActividadesEquipo = $request->input('ordenServicioTipoUnidad');
        $registroOrdenServicio->reporteActividadesModelo = $request->input('ordenServicioModelo');
        $registroOrdenServicio->reporteActividadesVerificacion = $request->input('reporteActividadesVerificacion');
        $registroOrdenServicio->reporteActividadesServicio = $request->input('reporteActividadesServicio');
        $registroOrdenServicio->reporteActividadesPreventivo = $request->input('reporteActividadesPreventivo');
        $registroOrdenServicio->reporteActividadesCorrectivo = $request->input('reporteActividadesCorrectivo');
        $registroOrdenServicio->reporteActividadesMarca = $request->input('ordenServicioMarca');
        $registroOrdenServicio->reporteActividadesUbicacion = $request->input('reporteActividadesUbicacion');
        $registroOrdenServicio->reporteActividadesNivelCombustible = $request->input('reporteActividadesNivelCombustible');
        $registroOrdenServicio->reporteActividadesDiagnostico = $request->input('reporteActividadesDiagnostico');
        $registroOrdenServicio->reporteActividadesFechaEntrada = $request->input('ordenServicioFechaIngreso');
        $registroOrdenServicio->reporteActividadesFechaSalida = $request->input('ordenServicioFechaIngreso');
        $registroOrdenServicio->reporteActividadesResultado = $request->input('reporteActividadesResultado');
        $registroOrdenServicio->reporteActividadesVerificacion_1 = $request->input('reporteActividadesVerificacion_1', 'No');
        $registroOrdenServicio->reporteActividadesVerificacion_2 = $request->input('reporteActividadesVerificacion_2', 'No');
        $registroOrdenServicio->reporteActividadesVerificacion_3 = $request->input('reporteActividadesVerificacion_3', 'No');
        $registroOrdenServicio->reporteActividadesVerificacion_4 = $request->input('reporteActividadesVerificacion_4', 'No');
        $registroOrdenServicio->reporteActividadesVerificacion_5 = $request->input('reporteActividadesVerificacion_5', 'No');
        $registroOrdenServicio->reporteActividadesVerificacion_6 = $request->input('reporteActividadesVerificacion_6', 'No');
        $registroOrdenServicio->reporteActividadesVerificacion_7 = $request->input('reporteActividadesVerificacion_7', 'No');
        $registroOrdenServicio->reporteActividadesVerificacion_8 = $request->input('reporteActividadesVerificacion_8', 'No');
        $registroOrdenServicio->reporteActividadesVerificacion_9 = $request->input('reporteActividadesVerificacion_9', 'No');
        $registroOrdenServicio->reporteActividadesVerificacion_10 = $request->input('reporteActividadesVerificacion_10', 'No');
        $registroOrdenServicio->reporteActividadesVerificacion_11 = $request->input('reporteActividadesVerificacion_11', 'No');
        $registroOrdenServicio->reporteActividadesVerificacion_12 = $request->input('reporteActividadesVerificacion_12', 'No');
        $registroOrdenServicio->reporteActividadesVerificacion_13 = $request->input('reporteActividadesVerificacion_13', 'No');
        $registroOrdenServicio->reporteActividadesVerificacion_14 = $request->input('reporteActividadesVerificacion_14', 'No');
        $registroOrdenServicio->reporteActividadesVerificacion_15 = $request->input('reporteActividadesVerificacion_15', 'No');
        $registroOrdenServicio->reporteActividadesVerificacion_16 = $request->input('reporteActividadesVerificacion_16', 'No');
        $registroOrdenServicio->reporteActividadesVerificacion_17 = $request->input('reporteActividadesVerificacion_17', 'No');
        $registroOrdenServicio->reporteActividadesVerificacion_18 = $request->input('reporteActividadesVerificacion_18', 'No');
        $registroOrdenServicio->reporteActividadesVerificacion_19 = $request->input('reporteActividadesVerificacion_19', 'No');
        $registroOrdenServicio->reporteActividadesVerificacion_20 = $request->input('reporteActividadesVerificacion_20', 'No');
        $registroOrdenServicio->reporteActividadesVerificacion_21 = $request->input('reporteActividadesVerificacion_21', 'No');
        $registroOrdenServicio->reporteActividadesVerificacion_22 = $request->input('reporteActividadesVerificacion_22', 'No');
        $registroOrdenServicio->reporteActividadesVerificacion_23 = $request->input('reporteActividadesVerificacion_23', 'No');
        $registroOrdenServicio->reporteActividadesVerificacion_24 = $request->input('reporteActividadesVerificacion_24', 'No');
        $registroOrdenServicio->reporteActividadesCategoria1 = $request->input('reporteActividadesCategoria1');
        $registroOrdenServicio->reporteActividadesCantidad1 = $request->input('reporteActividadesCantidad1');
        $registroOrdenServicio->reporteActividadesCategoria2 = $request->input('reporteActividadesCategoria2');
        $registroOrdenServicio->reporteActividadesCantidad2 = $request->input('reporteActividadesCantidad2');
        $registroOrdenServicio->reporteActividadesCategoria3 = $request->input('reporteActividadesCategoria3');
        $registroOrdenServicio->reporteActividadesCantidad3 = $request->input('reporteActividadesCantidad3');
        $registroOrdenServicio->reporteActividadesCategoria4 = $request->input('reporteActividadesCategoria4');
        $registroOrdenServicio->reporteActividadesCantidad4 = $request->input('reporteActividadesCantidad4');
        $registroOrdenServicio->reporteActividadesCategoria5 = $request->input('reporteActividadesCategoria5');
        $registroOrdenServicio->reporteActividadesCantidad5 = $request->input('reporteActividadesCantidad5');
        $registroOrdenServicio->reporteActividadesMaquinaria1 = $request->input('reporteActividadesMaquinaria1');
        $registroOrdenServicio->reporteActividadesEconomico1 = $request->input('reporteActividadesEconomico1');
        $registroOrdenServicio->reporteActividadesMaquinaria2 = $request->input('reporteActividadesMaquinaria2');
        $registroOrdenServicio->reporteActividadesEconomico2 = $request->input('reporteActividadesEconomico2');
        $registroOrdenServicio->reporteActividadesMaquinaria3 = $request->input('reporteActividadesMaquinaria3');
        $registroOrdenServicio->reporteActividadesEconomico3 = $request->input('reporteActividadesEconomico3');
        $registroOrdenServicio->reporteActividadesMaquinaria4 = $request->input('reporteActividadesMaquinaria4');
        $registroOrdenServicio->reporteActividadesEconomico4 = $request->input('reporteActividadesEconomico4');
        $registroOrdenServicio->reporteActividadesMaquinaria5 = $request->input('reporteActividadesMaquinaria5');
        $registroOrdenServicio->reporteActividadesEconomico5 = $request->input('reporteActividadesEconomico5');
        $registroOrdenServicio->reporteActividadesMaquinaria6 = $request->input('reporteActividadesMaquinaria6');
        $registroOrdenServicio->reporteActividadesEconomico6 = $request->input('reporteActividadesEconomico6');
        $registroOrdenServicio->reporteActividadesMaquinaria7 = $request->input('reporteActividadesMaquinaria7');
        $registroOrdenServicio->reporteActividadesEconomico7 = $request->input('reporteActividadesEconomico7');
        $registroOrdenServicio->reporteActividadesActividad1 = $request->input('reporteActividadesActividad1');
        $registroOrdenServicio->reporteActividadesRecurso1 = $request->input('reporteActividadesRecurso1');
        $registroOrdenServicio->reporteActividadesActividad2 = $request->input('reporteActividadesActividad2');
        $registroOrdenServicio->reporteActividadesRecurso2 = $request->input('reporteActividadesRecurso2');
        $registroOrdenServicio->reporteActividadesActividad3 = $request->input('reporteActividadesActividad3');
        $registroOrdenServicio->reporteActividadesRecurso3 = $request->input('reporteActividadesRecurso3');
        $registroOrdenServicio->reporteActividadesActividad4 = $request->input('reporteActividadesActividad4');
        $registroOrdenServicio->reporteActividadesRecurso4 = $request->input('reporteActividadesRecurso4');
        $registroOrdenServicio->reporteActividadesActividad5 = $request->input('reporteActividadesActividad5');
        $registroOrdenServicio->reporteActividadesRecurso5 = $request->input('reporteActividadesRecurso5');

        $registroOrdenServicio->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\registroOrdenServicio  $registroOrdenServicio
     * @return \Illuminate\Http\Response
     */
    public function show(registroOrdenServicio $registroOrdenServicio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\registroOrdenServicio  $registroOrdenServicio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registroOrdenServicio = registroOrdenServicio::findOrFail($id);
        return view('registroOrdenServicio.edit', compact('registroOrdenServicio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\registroOrdenServicio  $registroOrdenServicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $numCodigo = registroOrdenServicio::latest('id')->first();

        if (empty($numCodigo)) {
            $codigo = 1;
        } else {
            $codigo = $numCodigo->id + 1;
        }

        $registroOrdenServicio = registroOrdenServicio::find($id);

        $registroOrdenServicio->ordenServicioEstado = 'Completado';
        $registroOrdenServicio->ordenServicioCodigo = $codigo;

        $registroOrdenServicio->ordenServicioNumEmpleadoElaboro = $request->input('ordenServicioNumEmpleadoElaboro');
        $registroOrdenServicio->ordenServicioNombreEmpleadoElaboro = $request->input('ordenServicioNombreEmpleadoElaboro');

        $registroOrdenServicio->ordenServicioFechaIngreso = $request->input('ordenServicioFechaIngreso');
        $registroOrdenServicio->ordenServicioMantenimiento = $request->input('ordenServicioMantenimiento');
        $registroOrdenServicio->ordenServicioFechaSalida = $request->input('ordenServicioFechaIngreso');
        $registroOrdenServicio->ordenServicioMarca = $request->input('ordenServicioMarca');
        $registroOrdenServicio->ordenServicioModelo = $request->input('ordenServicioModelo');
        $registroOrdenServicio->ordenServicioPlacas = $request->input('ordenServicioPlacas');
        $registroOrdenServicio->ordenServicioKilometraje = $request->input('ordenServicioKilometraje');
        $registroOrdenServicio->ordenServicioHorometro = $request->input('ordenServicioHorometro');
        $registroOrdenServicio->ordenServicioTipoUnidad = $request->input('ordenServicioTipoUnidad');
        $registroOrdenServicio->ordenServicioNumEco = $request->input('ordenServicioNumEco');
        $registroOrdenServicio->ordenServicioDescripcion = $request->input('ordenServicioDescripcion');
        $registroOrdenServicio->ordenServicioDiagnostico = $request->input('ordenServicioDiagnostico');
        $registroOrdenServicio->ordenServicioRefacciones = '';

        $registroOrdenServicio->save();


        $registroOrdenServicio = registroOrdenServicio::all();

        $registroOrdenServicioIncompleto = registroOrdenServicio::where('ordenServicioEstado', '=', 'Incompleto')->get();
        $registroOrdenServicioCompleto = registroOrdenServicio::where('ordenServicioEstado', '=', 'Completo')->get();

        return view('home', compact('registroOrdenServicio', 'registroOrdenServicioIncompleto', 'registroOrdenServicioCompleto'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\registroOrdenServicio  $registroOrdenServicio
     * @return \Illuminate\Http\Response
     */
    public function destroy(registroOrdenServicio $registroOrdenServicio)
    {
        //
    }
}
