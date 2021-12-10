@extends('layouts.plantillaBase')
@section('contenido')
<div class="container text-dark">
    <h2>Editar Usuario</h2>  
    <form action="/usuarios/{{$Usuario->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Numero de CI</label>
            <input id="ci" name="ci" type="text" class="form-control" tabindex="1" value="{{$Usuario->ci}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nombres y Apellidos</label>
            <input id="nombre" name="nombre" type="text" class="form-control" tabindex="2" value="{{$Usuario->nombre}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Direccion</label>
            <input id="direccion" name="direccion" type="text" class="form-control" tabindex="3" value="{{$Usuario->direccion}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Telefono</label>
            <input id="telefono" name="telefono" type="number" step="any" class="form-control" tabindex="4" value="{{$Usuario->telefono}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">email</label>
            <input id="email" name="email" type="text" step="any"  class="form-control" tabindex="5" value="{{$Usuario->email}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">contraseña</label>
            <input id="contraseña" name="contraseña" type="text" step="any"  class="form-control" tabindex="6" value="{{$Usuario->contraseña}}">
        </div>
        <a href="/usuarios" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
    </form>
    </div>
@endsection