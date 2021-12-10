@extends('layouts.plantillaBase')
@section('contenido')
<div class="container text-dark">
    <h2>Agregar Marca</h2>  
    <form action="/marcas/{{$Marca->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Nombre de la Marca</label>
            <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1" value="{{$Marca->nombre}}" >
        </div>
        <a href="/marcas" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
    </form>
    </div>
@endsection