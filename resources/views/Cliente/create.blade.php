@extends('layouts.plantillaBase')
@section('contenido')
<div class="container text-dark">
    <h2>Agregar Cliente</h2>  
    <form action="/clientes" method="POST">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Numero de CI</label>
            <input id="ci" name="ci" type="text" class="form-control" tabindex="1" >
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Nombres y Apellidos</label>
            <input id="nombre" name="nombre" type="text" class="form-control" tabindex="2">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Direccion</label>
            <input id="direccion" name="direccion" type="text" class="form-control" tabindex="3">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Telefono</label>
            <input id="telefono" name="telefono" type="number" step="any" class="form-control" tabindex="4">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">email</label>
            <input id="email" name="email" type="text" step="any"  class="form-control" tabindex="4">
        </div>
        <a href="/clientes" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
    </form>
    </div>
@endsection