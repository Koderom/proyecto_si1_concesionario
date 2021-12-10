@extends('layouts.plantillaBase')
@section('contenido')
<div class="container text-dark">
    <h2>Agregar Categoria</h2>  
    <form action="/categorias" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Nombre Categoria</label>
            <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1" >
        </div>
        
        <a href="/categorias" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
    </form>
    </div>
@endsection