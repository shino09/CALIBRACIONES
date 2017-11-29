<?php

namespace App\Http\Controllers;

use App\Tipo;
use App\TipoEquipo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\TipoCreateRequest;
use App\Http\Requests\TipoUpdateRequest;

class TipoController extends Controller
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
        $tipos = Tipo::orderBy('nombre', 'asc')->paginate(20);
        $tipos_equipos = TipoEquipo::orderBy('nombre', 'asc')->paginate(20);
        return view('administrador.tipos.index',compact('tipos','tipos_equipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos_equipos = TipoEquipo::where('id','=',1)->orWhere('id','=',2)->orderBy('nombre', 'asc')->lists('nombre','id');
        return view('administrador.tipos.create',compact('tipos_equipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TipoCreateRequest $request)
    {
        $tipo= new Tipo;
        $tipo->nombre=$request->input("nombre");
        $tipo->tipoEquipo_id=$request->input("tipoEquipo_id");
        $tipo->save();

        return redirect('/tipo')->with('mensaje','Tipo equipo registrada exitósamente');
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
        $tipo = Tipo::find($id);
        $tipos_equipos = TipoEquipo::orderBy('nombre', 'asc')->lists('nombre','id');
        return view('administrador.tipos.edit',compact('tipo',$tipo),compact('tipos_equipos',$tipos_equipos));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TipoUpdateRequest $request, $id)
    {
        $tipo = Tipo::find($id);
        $tipo->nombre=$request->input("nombre");
        $tipo->tipoEquipo_id=$request->input("tipoEquipo_id");
        $tipo->save();

        Session::flash('mensaje','Tipo equipo actualizado exitósamente');
        return Redirect::to('/tipo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tipo::destroy($id);

        Session::flash('mensaje2','Tipo equipo eliminada exitósamente');
        return Redirect::to('/tipo');
    }
}
