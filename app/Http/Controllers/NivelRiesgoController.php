<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NivelR;

class NivelRiesgoController extends Controller
{
    public function create ()
    {
        return view('nivel_riesgo.create');
    }

    public function store (Request $request)
    {
        $validados = $request->validate([
            'codNivelRiesgo'=>'required|string|min:2|max:30',
            'descripcion'=>'required|string|min:2|max:255',

        ]);

        $nivelRiesgo=NivelR::create([
            'codNivelRiesgo'=>$validados['codNivelRiesgo'],
            'descripcion'=>$validados['descripcion'],             

        ]);

        return redirect()->back()->with('success', 'Nivel de Riesgo guardado con éxito.');
    }

    public function index3()
    {
        $nivelRiesgos = NivelR::all();
        return view('nivel_riesgo.index', ['nivel_riesgos' => $nivelRiesgos]);
    }

}