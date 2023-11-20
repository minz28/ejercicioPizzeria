<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
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
                    <li class="list-group-item"><a href="/solicitudes/ingresar">Ingresar solicitud</a></li>
                    <li class="list-group-item"><a href="/solicitudes/">Listar solicitud</a></li>
                    <hr>
                    <li class="list-group-item"><a href="/logout">Cerrar sesión</a></li>
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>