@extends('layouts.app')
@section('content')

<div class="container">
    <h2>Departamento</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Id Departamento</th>
                <th>Nombre Departamento</th>
                <th>Opciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($departamento as $departamento)

                <tr>
                    <td>{{ $departamento->idDepartamento}} </td>
                    <td>{{ $departamento->nombreDpto}} </td>

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