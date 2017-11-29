<?php

namespace App\Http\Controllers;

use App\Marca;
use App\Modelo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\ModeloCreateRequest;
use App\Http\Requests\ModeloUpdateRequest;

class ModeloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $modelos = Modelo::orderBy('nombre', 'asc')->paginate(20);
        $marcas = Marca::orderBy('nombre', 'asc')->paginate(20);

        return view('administrador.modelos.index',compact('modelos','marcas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $marcas = Marca::orderBy('nombre', 'asc')->lists('nombre','id');
        return view('administrador.modelos.create',compact('marcas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ModeloCreateRequest $request)
    {
        $modelo= new Modelo;
        $modelo->nombre=$request->input("nombre");
        $modelo->marca_id=$request->input("marca_id");
        $modelo->save();

        return redirect('/modelo')->with('mensaje','Modelo equipo registrado exitósamente');
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
        $modelo = Modelo::find($id);
        $marcas = Marca::orderBy('nombre', 'asc')->lists('nombre','id');
        return view('administrador.modelos.edit',compact('modelo','marcas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ModeloUpdateRequest $request, $id)
    {
        $modelo = Modelo::find($id);
        $modelo->nombre=$request->input("nombre");
        $modelo->marca_id=$request->input("marca_id");
        $modelo->save();

        Session::flash('mensaje','Modelo equipo actualizado exitósamente');
        return Redirect::to('/modelo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Modelo::destroy($id);

        Session::flash('mensaje2','Modelo equipo eliminado exitósamente');
        return Redirect::to('/modelo');
    }
}
