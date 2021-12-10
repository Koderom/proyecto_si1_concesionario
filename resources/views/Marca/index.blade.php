@extends('layouts.plantillaBase')
@section('contenido')
<div class="container bg-white text-dark">
    <h2>Gestionar Marcas</h2>
    <div class=" mt-10 ml-10 mr-10">
        <table class="table table-white table-striped mt-3 table-bordered bt-5 ">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Accioner</th>
                </tr>            
            </thead>
            <tbody>
                @foreach ($Marcas as $Marca)
                    <tr>
                        <td>{{$Marca->id }}</td>
                        <td>{{$Marca->nombre}}</td>
                        <td>
                            <form action="{{ route('marcas.destroy' , $Marca->id)}}" method="POST">
                            <a href="/marcas/{{$Marca->id}}/edit" class="btn btn-info ">Editar</a>
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
        <a href = "marcas/create" class="btn btn-primary">Nueva Marca</a>
    </div>
    
</div>
@endsection