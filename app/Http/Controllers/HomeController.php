<?php

namespace App\Http\Controllers;

use App\Models\registroOrdenServicio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $registroOrdenServicio = registroOrdenServicio::all();

        $registroOrdenServicioIncompleto = registroOrdenServicio::where('ordenServicioEstado', '=', 'Incompleto')->get();
        $registroOrdenServicioCompleto = registroOrdenServicio::where('ordenServicioEstado', '=', 'Completo')->get();

        return view('home', compact('registroOrdenServicio', 'registroOrdenServicioIncompleto', 'registroOrdenServicioCompleto'));
    }
}
