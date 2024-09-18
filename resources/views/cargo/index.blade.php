@extends('layouts.app')
@section('content')

<div class="container">
    <h2>Cargo</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Id Cargo</th>
                <th>Nombre Del Cargo</th>
                <th>Opciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($cargo as $cargo)

                <tr>
                    <td>{{ $cargo->idCargo}} </td>
                    <td>{{ $cargo->descripcionCargo}} </td>

                    <td>
                        <a href="">Actualizar</a>
                        <a href="">Eliminar</a>
                    </td>


                </tr>

            @endforeach
        </tbody>

    </table>
</div>

@endsection