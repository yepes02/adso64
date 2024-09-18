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
    <h1>Crear Departamento</h1>

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

    <form action="{{ route('departamento.store') }}" method="POST">
        @csrf

        <label for="nombreDpto">Nombre Departamento:</label>
        <input type="text" id="nombreDpto" name="nombreDpto" required>

        <button type="submit">Guardar Departamento</button>
    </form>
</div>
</body>
</html>

@endsection