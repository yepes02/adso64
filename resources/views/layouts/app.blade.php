<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">    
    <title>@yield('title','Mi app')</title>
</head>
<body>
    <header>
        <h1>Payroll</h1>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Inicio</a></li>
                
                <li class="has-submenu">
                    <a>Departamento</a>
                    <ul class="submenu">
                        <li><a href="{{ url('departamento/index') }}">Ver Todos</a></li>
                        <li><a href="{{ url('departamento/create') }}">Registrar Nuevo</a></li>
                    </ul>                    
                </li>

                <li class="has-submenu">
                    <a>Cargo</a>
                    <ul class="submenu">
                        <li><a href="{{ url('cargo/index') }}">Ver Todos</a></li>
                        <li><a href="{{ url('cargo/create') }}">Registrar Nuevo</a></li>
                    </ul>                    
                </li>

                <li class="has-submenu">
                    <a>Nivel de Riesgos</a>
                    <ul class="submenu">
                        <li><a href="{{ url('nivel_riesgo/index') }}">Ver Todos</a></li>
                        <li><a href="{{ url('nivel_riesgo/create') }}">Registrar Nuevo</a></li>
                    </ul>                    
                </li>

                <li class="has-submenu">
                    <a>Tipo de Contratos</a>
                    <ul class="submenu">
                        <li><a href="{{ url('tipo_contrato/index') }}">Ver Todos</a></li>
                        <li><a href="{{ url('tipo_contrato.create') }}">Registrar Nuevo</a></li>
                    </ul>                    
                </li>

            </ul>
        </nav>
    </header>
    <main>
         @yield('content')
    </main>

    <footer>
        <p>&copy; 2024 Servicios De Nomina. Todos Los Derechos Reservados.</p>
    </footer>
    
</body>
</html>