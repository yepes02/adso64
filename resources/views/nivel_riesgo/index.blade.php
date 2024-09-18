@extends('layouts.app')
@section('content')

<div class="container">
    <h2>Cargo</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Id Nivel Riesgo</th>
                <th>Descripcion del Riesgo</th>
                <th>Opciones</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($nivel_riesgos as $nivel_riesgos)

                <tr>                    
                    <td>{{ $nivel_riesgos->codNivelRiesgo}} </td>
                    <td>{{ $nivel_riesgos->descripcion}} </td>

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