@extends('layouts.plantillaBase')
@section('contenido')
<div class="container text-dark">
    <h2>Editar Categoria</h2>  
    <form action="/categorias/{{$Categoria->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Nombre Categoria</label>
            <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1" value="{{$Categoria->nombre}}" >
        </div>
        
        <a href="/categorias" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
    </form>
    </div>
@endsection