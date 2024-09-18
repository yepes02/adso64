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
    <h1>Crear Nivel De Riesgo</h1>

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

    <form action="{{ route('nivelRiesgo.store') }}" method="POST">
        @csrf

        <label for="codNivelRiesgo">Nivel de Riesgo:</label>
        <input type="text" id="codNivelRiesgo" name="codNivelRiesgo" required>

        <label for="descripcion">Descripcion del Riesgo:</label>
        <input type="text" id="descripcion" name="descripcion" required>

        <button type="submit">Guardar Riesgo</button>
    </form>
</div>
</body>
</html>

@endsection