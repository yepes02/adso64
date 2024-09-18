<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cargo;

class CargoController extends Controller
{
    public function create ()
    {
        return view('cargo.create');
    }

    public function store (Request $request)
    {
        $validados = $request->validate([
            'descripcionCargo'=>'required|string|min:2|max:255',
        ]);

        $cargo=Cargo::create([
            'descripcionCargo'=>$validados['descripcionCargo'],           

        ]);

        return redirect()->back()->with('success', 'Cargo guardado con éxito.');
    }

    public function index2()
    {
        $cargo = Cargo::all();
        return view('cargo.index', ['cargo'=>$cargo]);
    }

}