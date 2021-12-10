@extends('layouts.plantillaBase')
@section('contenido')
<div class="container bg-white text-dark">
    <h2>Gestionar cliente</h2>
    <div class=" mt-10 ml-10 mr-10">
        <table class="table table-white table-striped mt-3 table-bordered bt-5 ">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">CI</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Email</th>
                    <th scope="col">Accioner</th>
                </tr>            
            </thead>
            <tbody>
                @foreach ($Clientes as $cliente)
                    <tr>
                        <td>{{$cliente->id }}</td>
                        <td>{{$cliente->ci}}</td>
                        <td>{{$cliente->nombre}}</td>
                        <td>{{$cliente->Direccion}}</td>
                        <td>{{$cliente->telefono}}</td>
                        <td>{{$cliente->email}}</td>
                        <td>
                            <form action="{{ route('clientes.destroy' , $cliente->id)}}" method="POST">
                            <a href="/clientes/{{$cliente->id}}/edit" class="btn btn-info ">Editar</a>
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
        <a href = "clientes\create" class="btn btn-primary">CREAR</a>
    </div>
    
</div>
@endsection