<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\UsuarioCreateRequest;
use App\Http\Requests\UsuarioUpdateRequest;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $usuarios = User::orderBy('id', 'asc')->paginate(20);
        return view('administrador.usuarios.index',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            return view('administrador.usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsuarioCreateRequest $request)
    {
        $usuario=new User;
        $usuario->name = $request->input('name') ;
        $usuario->email=$request->input("email");
        $usuario->password= bcrypt( $request->input("password") );
        $usuario->apellido_paterno = $request->input('apellido_paterno');
        $usuario->apellido_materno = $request->input('apellido_materno') ;
        $usuario->rut_usuario = $request->input("rut_usuario");
        $usuario->tipo_usuario = $request->input('tipo_usuario');
        $usuario->estado = 'Activo';
        $usuario->save();

        return redirect('/usuario')->with('mensaje','Usuario registrado exitósamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuario = User::find($id);
        return view("administrador.usuarios.show")->with("usuario", $usuario);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = User::find($id);
        return view("administrador.usuarios.edit")->with("usuario", $usuario);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsuarioUpdateRequest $request, $id)
    {
        $usuario = User::find($id);
        $usuario->name = $request->input('name');
        $usuario->email = $request->input('email');
        $usuario->apellido_paterno = $request->input('apellido_paterno');
        $usuario->apellido_materno = $request->input('apellido_materno');
        $usuario->password= bcrypt( $request->input("password") );
        $usuario->tipo_usuario= $request->input('tipo_usuario');
        $usuario->update();

        Session::flash('mensaje','Datos usuario actualizados exitósamente');
        return Redirect::to('/usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usuario=User::findOrFail($id);
        if($usuario->estado == 'Activo')
        {
            $usuario->estado='Suspendido';
            $usuario->update();
            return Redirect::to('/usuario');
        }
        if($usuario->estado == 'Suspendido')
        {
            $usuario->estado='Activo';
            $usuario->update();
            return Redirect::to('/usuario');
        }
    }
}
