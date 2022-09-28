<?php

namespace App\Http\Controllers;

use App\Models\registroReporteActividades;
use Illuminate\Http\Request;

class RegistroReporteActividadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registroReporteActividades = registroReporteActividades::all();
        return view('registroReporteActividades.index', compact('registroReporteActividades'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('registroReporteActividades.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registroReporteActividades = new registroReporteActividades();
        
        $registroReporteActividades->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\registroReporteActividades  $registroReporteActividades
     * @return \Illuminate\Http\Response
     */
    public function show(registroReporteActividades $registroReporteActividades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\registroReporteActividades  $registroReporteActividades
     * @return \Illuminate\Http\Response
     */
    public function edit($codigo)
    {
        $registroReporteActividades = registroReporteActividades::findOrFail($codigo);
        return view('registroReporteActividades.edit', compact('registroReporteActividades'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\registroReporteActividades  $registroReporteActividades
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, registroReporteActividades $registroReporteActividades)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\registroReporteActividades  $registroReporteActividades
     * @return \Illuminate\Http\Response
     */
    public function destroy(registroReporteActividades $registroReporteActividades)
    {
        //
    }
}
