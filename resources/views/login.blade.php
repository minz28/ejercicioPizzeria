@extends('template')

@section('content')
<form method="post">
    @csrf
    <div class="mb-3">
        <label for="email" class="form-label">Usuario</label>
        <input type="text" class="form-control" id="email" name="email" value="{{$usuario->email}}">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Clave</label>
        <input type="password" class="form-control" id="password" name="password" value="{{$usuario->password}}">
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
</form>

@if ($errors->any())
    <br>
    <div class="col-12 alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@endsection

@section('tituloCard', 'Login')
@section('titulo', 'Pizzeria - Login')