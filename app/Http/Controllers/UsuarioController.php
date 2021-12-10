<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;


class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Usuarios = Usuario::all();
        return view('Usuario.index')->with('Usuarios',$Usuarios);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Usuario = new Usuario();
        $Usuario->ci = $request->get('ci');
        $Usuario->nombre = $request->get('nombre');
        $Usuario->direccion = $request->get('direccion');
        $Usuario->telefono = $request->get('telefono');
        $Usuario->email = $request->get('email');
        $Usuario->contraseña = $request->get('contraseña');
        $Usuario->save();
        return redirect('/usuarios');

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
        $Usuario = Usuario::find($id);
        return view('Usuario.edit')->with('Usuario',$Usuario);
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
        $Usuario =  Usuario::find($id);
        $Usuario->ci = $request->get('ci');
        $Usuario->nombre = $request->get('nombre');
        $Usuario->direccion = $request->get('direccion');
        $Usuario->telefono = $request->get('telefono');
        $Usuario->email = $request->get('email');
        $Usuario->contraseña = $request->get('contraseña');
        $Usuario->save();
        return redirect('/usuarios');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();
        return redirect('/usuarios');
    }
}
