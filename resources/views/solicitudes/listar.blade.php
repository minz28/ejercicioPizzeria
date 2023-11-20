@extends('template')

@section('content')
@section('content')
<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Pizza</th>
            <th>Cliente</th>
            <th>Fecha</th>
        </tr>
    </thead>
    <tbody>
        @foreach($solicitudes as $solicitud)
        <tr>
            <td>{{$solicitud->id}}</td>
            <td>{{$solicitud->pizzas->nombre}}</td>
            <td>{{$solicitud->cliente}}</td>
            <td>{{$solicitud->created_at}}</td>
        </tr>
        @endforeach
    </tbody>    
</table>

<a href="/solicitudes/ingresar"><button type="button" class="btn btn-primary">Agregar</button></a>
@endsection

@section('tituloCard', 'Listar solicitudes')
@section('titulo', 'Pizzeria - Solicitudes')