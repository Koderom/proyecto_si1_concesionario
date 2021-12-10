@extends('layouts.plantillaBase')
@section('contenido')
<div class="container bg-white text-dark">
    <h2>Gestionar Categorias</h2>
    <div class=" mt-10 ml-10 mr-10">
        <table class="table table-white table-striped mt-3 table-bordered bt-5 ">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Acciones</th>
                </tr>            
            </thead>
            <tbody>
                @foreach ($Categorias as $Categoria)
                    <tr>
                        <td>{{$Categoria->id }}</td>
                        <td>{{$Categoria->nombre}}</td>
                        <td>
                            <form action="{{ route('categorias.destroy' , $Categoria->id)}}" method="POST">
                            <a href="/categorias/{{$Categoria->id}}/edit" class="btn btn-info ">Editar</a>
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
        <a href = "categorias\create" class="btn btn-primary">Nueva Categoria</a>
    </div>
    
</div>
@endsection