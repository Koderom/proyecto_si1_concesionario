@extends('layouts.plantillaBase')
@section('contenido')
<div class="container text-dark">
    <h2>Editar vehiculo</h2>  
    <form action="/vehiculos/{{$Vehiculo->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="" class="form-label">Nombre del vehiculo</label>
            <input id="nombre" name="nombre" type="text" class="form-control" tabindex="1" value="{{$Vehiculo->nombre}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input id="precio" name="precio" type="number" class="form-control" tabindex="2" value="{{$Vehiculo->precio}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Color</label>
            <input id="color" name="color" type="text" class="form-control" tabindex="3" value="{{$Vehiculo->color}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Año de salida</label>
            <input id="anio" name="anio" type="number" step="any" class="form-control" tabindex="4"
            value="{{$Vehiculo->anio}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Numero de Chasis</label>
            <input id="nchasis" name="nchasis" type="text" step="any"  class="form-control" tabindex="4" value="{{$Vehiculo->nroChasis}}">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Numero identificador Categoria</label>
            <select name="categoria_id" id="categoria_id" >
                
                @foreach ($lista_categoria as $item)
                    <option value="{{$item->id}}">{{$item->nombre}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Numero identificador Marca</label>
            <select name="marca_id" id="marca_id" >

                @foreach ($lista_marcas as $item)
                    <option value="{{$item->id}}">{{$item->nombre}}</option>
                @endforeach
            </select>
        </div>
        <a href="/vehiculos" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
    </form>
    </div>
@endsection