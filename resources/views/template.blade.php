<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    
    <title>@yield('titulo')</title>
</head>
<body>    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Pizzeria</h1>
            </div>
        </div>        
        <div class="row">
            @auth
            <div class="col-2">
                <ul>
                    <li class="list-group-item"><h3>Solicitudes</h3></li>
                    <li class="list-group-item"><a href="{{url('/solicitudes/ingresar')}}">Ingresar solicitud</a></li>
                    <li class="list-group-item"><a href="{{url('/solicitudes/')}}">Listar solicitud</a></li>
                    <hr>
                    <li class="list-group-item"><a href="{{url('/logout')}}">Cerrar sesión</a></li>
                </ul>
            </div>
            @endauth
            <div class="col-10">
                <div class="card">
                    <h2 class="card-header">@yield('tituloCard')</h2>
                    <div class="card-body">
                        @section('content')
                        @show
                    </div>
                </div>
            </div>
        </div>
    </div>

<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>