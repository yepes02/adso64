@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> 

</head>
<body>
<div class="container">
    <h1>Crear Tipo De Contrato</h1>

    @if(session('success'))
        <div class="alert success">
            {{ session('success') }}
        </div>
    @elseif($errors->any())
        <div class="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('tipoContrato.store') }}" method="POST">
        @csrf

        <label for="codTipoContrato">Codigo Tipo Trabajo:</label>
        <input type="text" id="codTipoContrato" name="codTipoContrato" required>

        <label for="DescripcionTipoContrato">Descripcion del Tipo Trabajo:</label>
        <input type="text" id="DescripcionTipoContrato" name="DescripcionTipoContrato" required>

        <button type="submit">Guardar Tipo Trabajo</button>
    </form>
</div>
</body>
</html>

@endsection