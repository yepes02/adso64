<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departamento;

class DepartamentoController extends Controller
{
    public function create ()
    {
        return view('departamento.create');
    }

    public function store (Request $request)
    {
        $validados = $request->validate([
            'nombreDpto'=>'required|string|min:2|max:255',
        ]);

        $departamento=Departamento::create([
            'nombreDpto'=>$validados['nombreDpto'],           

        ]);

        return redirect()->back()->with('success', 'Departamento guardado con éxito.');
    }

    public function index1()
    {
        $departamento = Departamento::all();
        return view('departamento.index', ['departamento'=>$departamento]);
    }

}
