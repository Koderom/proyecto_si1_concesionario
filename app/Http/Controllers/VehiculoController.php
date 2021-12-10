<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Marca;
use App\Models\Vehiculo;
use Illuminate\Http\Request;


class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Vehiculos = Vehiculo::all();
        return view('Vehiculo.index')->with('Vehiculos',$Vehiculos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $Marcas = Marca::all();
        $dMarcas = array("lista_marcas"=>$Marcas);
        $Categorias = Categoria::all();
        $dCategoria = array("lista_categoria"=>$Categorias);
        return view('Vehiculo.create',$dMarcas,$dCategoria);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Vehiculo = new Vehiculo();
        $Vehiculo->nombre = $request->get('nombre');
        $Vehiculo->precio = $request->get('precio');
        $Vehiculo->color = $request->get('color');
        $Vehiculo->anio = $request->get('anio');
        $Vehiculo->nroChasis = $request->get('nchasis');
        $Vehiculo->categoria_id = $request->get('categoria_id');
        $Vehiculo->marca_id = $request->get('marca_id');
        $Vehiculo->save();
        return redirect('/vehiculos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Vehiculo = Vehiculo::find($id);
        $Marcas = Marca::all();
        $dMarcas = array("lista_marcas"=>$Marcas);
        $Categorias = Categoria::all();
        $dCategoria = array("lista_categoria"=>$Categorias);
        return view('Vehiculo.edit',$dMarcas,$dCategoria)->with('Vehiculo',$Vehiculo);   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Vehiculo = Vehiculo::find($id);
        $Vehiculo->nombre = $request->get('nombre');
        $Vehiculo->precio = $request->get('precio');
        $Vehiculo->color = $request->get('color');
        $Vehiculo->anio = $request->get('anio');
        $Vehiculo->nroChasis = $request->get('nchasis');
        $Vehiculo->categoria_id = $request->get('categoria_id');
        $Vehiculo->marca_id = $request->get('marca_id');
        $Vehiculo->save();
        return redirect('/vehiculos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vehiculo = Vehiculo::find($id);
        $vehiculo->delete();
        return redirect('vehiculos');
    }
}
