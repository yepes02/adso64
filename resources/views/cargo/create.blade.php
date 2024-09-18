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
    <h1>Crear Cargo</h1>

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

    <form action="{{ route('cargo.store') }}" method="POST">
        @csrf

        <label for="descripcionCargo">Descripcion del Cargo:</label>
        <input type="text" id="descripcionCargo" name="descripcionCargo" required>

        <button type="submit">Guardar Cargo</button>
    </form>
</div>
</body>
</html>

@endsection