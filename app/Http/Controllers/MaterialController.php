<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Material;
use App\TipoEquipo;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\MaterialCreateRequest;
use App\Http\Requests\MaterialUpdateRequest;

class MaterialController extends Controller
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
        $materiales = Material::orderBy('nombre', 'asc')->paginate(25);
        $tipos_equipos = TipoEquipo::orderBy('nombre', 'asc')->paginate(25);
        return view('administrador.materiales.index',compact('materiales','tipos_equipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos_equipos = TipoEquipo::where('id','=',3)->orderBy('nombre', 'asc')->lists('nombre','id');
        return view('administrador.materiales.create',compact('tipos_equipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MaterialCreateRequest $request)
    {
        $tipo= new Material();
        $tipo->nombre=$request->input("nombre");
        $tipo->tipoEquipo_id=$request->input("tipoEquipo_id");
        $tipo->save();

        return redirect('/material')->with('mensaje','Material equipo registrado exitósamente');
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
        $material = Material::find($id);
        $tipos_equipos = TipoEquipo::where('id','=',3)->orderBy('nombre', 'asc')->lists('nombre','id');
        return view('administrador.materiales.edit',compact('material',$material),compact('tipos_equipos',$tipos_equipos));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MaterialUpdateRequest $request, $id)
    {
        $material = Material::find($id);
        $material->nombre=$request->input("nombre");
        $material->tipoEquipo_id=$request->input("tipoEquipo_id");
        $material->save();

        Session::flash('mensaje','Material equipo actualizado exitósamente');
        return Redirect::to('/material');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Material::destroy($id);

        Session::flash('mensaje2','Tipo de material eliminado exitósamente');
        return Redirect::to('/material');
    }
}
