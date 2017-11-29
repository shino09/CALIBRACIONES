<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ClienteCreateRequest;
use App\Http\Requests\ClienteUpdateRequest;
use Illuminate\Support\Facades\Auth;
use App\User;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
            if(Auth::user()->tipo_usuario == 'administrador'){
                $clientes = Cliente::orderBy('nombre', 'asc')->paginate(20);
                return view('administrador.clientes.index',compact('clientes'));
            }

            else if(Auth::user()->tipo_usuario == 'empleado') {
                $clientes = Cliente::orderBy('nombre', 'asc')->paginate(20);
                return view('empleado.clientes.index',compact('clientes'));
            }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::check()){
            if(Auth::user()->tipo_usuario =='administrador'){
                return view('administrador.clientes.create');
            }

            if(Auth::user()->tipo_usuario =='empleado') {
                return view('empleado.clientes.create');
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClienteCreateRequest $request)
    {
        if(Auth::user()->tipo_usuario =='administrador') {
        $cliente=new Cliente();
        $cliente->nombre = $request->input('nombre') ;
        $cliente->rut_cliente = $request->input("rut_cliente");
        $cliente->ubicacion = $request->input('ubicacion') ;
        $cliente->planta = $request->input('planta');
        $cliente->estado = 'Activo';
        $cliente->save();


            return view('administrador.clientes.index')->with('mensaje', 'Cliente registrado exitósamente');
        }

        if(Auth::user()->tipo_usuario =='empleado'){
            $cliente=new Cliente();
            $cliente->nombre = $request->input('nombre') ;
            $cliente->rut_cliente = $request->input("rut_cliente");
            $cliente->ubicacion = $request->input('ubicacion') ;
            $cliente->planta = $request->input('planta');
            $cliente->estado = 'Activo';
            $cliente->save();

            return view('empleado.clientes.create')->with('mensaje', 'Cliente registrado exitósamente');
        }
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
        $cliente=Cliente::find($id);
        return view("administrador.clientes.edit")->with("cliente",$cliente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClienteUpdateRequest $request, $id)
    {
        $cliente =  Cliente::find($id);
        $cliente->nombre = $request->input('nombre');
        $cliente->ubicacion = $request->input('ubicacion');
        $cliente->planta = $request->input('planta');
        $cliente->save();

        Session::flash('mensaje','Datos cliente actualizados exitósamente');
        return Redirect::to('/cliente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cliente=Cliente::findOrFail($id);
        if($cliente->estado == 'Activo')
        {
            $cliente->estado='Suspendido';
            $cliente->update();
            return Redirect::to('/cliente');
        }
        if($cliente->estado == 'Suspendido')
        {
            $cliente->estado='Activo';
            $cliente->update();
            return Redirect::to('/cliente');
        }
    }
}
