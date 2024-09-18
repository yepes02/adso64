<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TipoC;

class TipoContratoController extends Controller
{
    public function create ()
    {
        return view('tipo_contrato.create');
    }

    public function store (Request $request)
    {
        $validados = $request->validate([
            'codTipoContrato'=>'required|string|min:1|max:30',
            'DescripcionTipoContrato'=>'required|string|min:2|max:255',

        ]);

        $tipoContrato=TipoC::create([
            'codTipoContrato'=>$validados['codTipoContrato'],
            'DescripcionTipoContrato'=>$validados['DescripcionTipoContrato'],             

        ]);

        return redirect()->back()->with('success', 'Tipo de Contrato guardado con éxito.');
    }

    public function index4()
    {
        $tipoContratos = TipoC::all();
        return view('tipo_contrato.index', ['tipo_contratos' => $tipoContratos]);
    }

}
