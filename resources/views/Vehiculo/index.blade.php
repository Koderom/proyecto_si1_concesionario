@extends('layouts.plantillaBase')
@section('contenido')
<div class="container bg-white text-dark">
    <h2>Gestionar Vehiculo</h2>
    <div class=" mt-10 ml-10 mr-10">
        <table class="table table-white table-striped mt-3 table-bordered bt-5 ">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Color</th>
                    <th scope="col">Año</th>
                    <th scope="col">Numero de Chasis</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Acciones</th>
                </tr>            
            </thead>
            <tbody>
                @foreach ($Vehiculos as $vehiculo)
                    <tr>
                        <td>{{$vehiculo->id }}</td>
                        <td>{{$vehiculo->nombre }}</td>
                        <td>{{$vehiculo->precio }}</td>
                        <td>{{$vehiculo->color }}</td>
                        <td>{{$vehiculo->anio }}</td>
                        <td>{{$vehiculo->nroChasis }}</td>
                        <td>{{$vehiculo->categoria->nombre}}</td>
                        <td>{{$vehiculo->marca->nombre }}</td>
                        <td>
                            <form action="{{ route('vehiculos.destroy' , $vehiculo->id)}}" method="POST">
                            <a href="/vehiculos/{{$vehiculo->id}}/edit" class="btn btn-info ">Editar</a>
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Borrar</button>
                            </form>
                        </td>
                    </tr>   
                @endforeach
            </tbody>    
        </table>
    </div>
    <div class="border-0 p-2 border-top">
        <a href = "vehiculos\create" class="btn btn-primary">CREAR</a>
    </div>
    
</div>
@endsection