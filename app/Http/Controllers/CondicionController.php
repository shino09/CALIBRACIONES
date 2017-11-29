<?php

namespace App\Http\Controllers;

use App\TipoEquipo;
use App\Condicion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CondicionCreateRequest;
use App\Http\Requests\CondicionUpdateRequest;
use DB;

class CondicionController extends Controller
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
        $condiciones = Condicion::orderBy('nombre', 'asc')->paginate(20);
        $tipos_equipos = TipoEquipo::orderBy('nombre', 'asc')->paginate(20);
        return view('administrador.condiciones.index',compact('tipos_equipos','condiciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos_equipos = TipoEquipo::orderBy('nombre', 'asc')->lists('nombre','id');
        return view('administrador.condiciones.create',compact('tipos_equipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CondicionCreateRequest $request)
    {
        $condicion= new Condicion;
        $condicion->nombre=$request->input("nombre");
        $condicion->tipoEquipo_id=$request->input("tipoEquipo_id");
        $condicion->save();

        return redirect('/condicion')->with('mensaje','Condición equipo registrada exitósamente');
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
        $condicion = Condicion::find($id);
        $tipos_equipos = TipoEquipo::orderBy('nombre', 'asc')->lists('nombre','id');
        return view('administrador.condiciones.edit',compact('condicion',$condicion),compact('tipos_equipos',$tipos_equipos));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CondicionUpdateRequest $request, $id)
    {
        $condicion = Condicion::find($id);
        $condicion->nombre=$request->input("nombre");
        $condicion->tipoEquipo_id=$request->input("tipoEquipo_id");
        $condicion->save();

        Session::flash('mensaje','Condición equipo actualizada exitósamente');
        return Redirect::to('/condicion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Condicion::destroy($id);

        Session::flash('mensaje2','Condición equipo eliminada exitósamente');
        return Redirect::to('/condicion');
    }
}
