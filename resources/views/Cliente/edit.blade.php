@extends('layouts.plantillaBase')
@section('contenido')
<div class="container text-dark">
    <h2>Agregar Cliente</h2>  
    <form action="/clientes/{{$cliente->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">CI</label>
            <input id="ci" name="ci" type="text" class="form-control" tabindex="1" value="{{$cliente->ci}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input id="nombre" name="nombre" type="text" class="form-control" tabindex="2" value="{{$cliente->nombre}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Direccion</label>
            <input id="direccion" name="direccion" type="text" class="form-control" tabindex="3" value="{{$cliente->Direccion}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Telefono</label>
            <input id="telefono" name="telefono" type="number" step="any"  class="form-control" tabindex="4" value="{{$cliente->telefono}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">email</label>
            <input id="email" name="email" type="text" step="any" class="form-control" tabindex="4" value="{{$cliente->email}}">
        </div>
        <a href="/clientes" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
    </form>
    </div>
@endsection