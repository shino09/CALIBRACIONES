<?php

namespace App\Http\Controllers;

use App\Unidad;
use Illuminate\Http\Request;
use App\TipoEquipo;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\UnidadCreateRequest;
use App\Http\Requests\UnidadUpdateRequest;

class UnidadController extends Controller
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
        $unidades = Unidad::orderBy('nombre', 'asc')->paginate(20);
        $tipos_equipos = TipoEquipo::orderBy('nombre', 'asc')->paginate(20);
        return view('administrador.unidades.index',compact('unidades','tipos_equipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos_equipos = TipoEquipo::where('id','<>',3)->orderBy('nombre', 'asc')->lists('nombre','id');
        return view('administrador.unidades.create',compact('tipos_equipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UnidadCreateRequest $request)
    {
        $unidad= new Unidad;
        $unidad->nombre=$request->input("nombre");
        $unidad->tipoEquipo_id=$request->input("tipoEquipo_id");
        $unidad->save();

        return redirect('/unidad')->with('mensaje','Unidad de medida registrada exitósamente');
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
        $unidad = Unidad::find($id);
        $tipos_equipos = TipoEquipo::orderBy('nombre', 'asc')->lists('nombre','id');
        return view('administrador.unidades.edit',compact('unidad',$unidad),compact('tipos_equipos',$tipos_equipos));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UnidadUpdateRequest $request, $id)
    {
        $unidad = Unidad::find($id);
        $unidad->nombre=$request->input("nombre");
        $unidad->tipoEquipo_id=$request->input("tipoEquipo_id");
        $unidad->save();

        Session::flash('mensaje','Unidad de medida actualizada exitósamente');
        return Redirect::to('/unidad');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Unidad::destroy($id);

        Session::flash('mensaje2','Unidad de medida eliminada exitósamente');
        return Redirect::to('/unidad');
    }
}
