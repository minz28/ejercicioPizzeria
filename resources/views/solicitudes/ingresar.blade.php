@extends('template')

@section('content')
<form method="post">
    @csrf
    <div class="mb-3">
        <label for="idPizza" class="form-label">Pizza</label>
        <select class="form-select" aria-label="Default select example" id="idPizza" name="idPizza">
            <!-- <option selected>Seleccione...</option> -->
            @foreach($pizzas as $pizza)
            <option value="{{$pizza->id}}">{{$pizza->nombre}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="cliente" class="form-label">Cliente</label>
        <input type="text" class="form-control" id="cliente" name="cliente" value="{{$solicitud->cliente}}">
    </div>
    <button type="submit" class="btn btn-primary">Agregar</button>
</form>
@endsection

@section('tituloCard', 'Ingresar solicitud')
@section('titulo', 'Pizzeria - Solicitudes')