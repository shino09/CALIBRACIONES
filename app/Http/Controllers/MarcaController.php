<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Marca;
use App\TipoEquipo;
use App\Http\Requests;
use App\Http\Requests\MarcaCreateRequest;
use App\Http\Requests\MarcaUpdateRequest;
use App\Http\Controllers\Controller;

class MarcaController extends Controller
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
        $marcas = Marca::orderBy('nombre', 'asc')->paginate(20);
        $tipos_equipos = TipoEquipo::orderBy('nombre', 'asc')->get();
        return view('administrador.marcas.index',compact('marcas','tipos_equipos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos_equipos = TipoEquipo::orderBy('nombre', 'asc')->lists('nombre','id');
        return view('administrador.marcas.create',compact('tipos_equipos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MarcaCreateRequest $request)
    {
        $marca= new Marca;
        $marca->nombre=$request->input("nombre");
        $marca->tipoEquipo_id=$request->input("tipoEquipo_id");
        $marca->save();

        return redirect('/marca')->with('mensaje','Marca equipo registrada exitósamente');
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
        $marca = Marca::find($id);
        $tipos_equipos = TipoEquipo::orderBy('nombre', 'asc')->lists('nombre','id');
        return view('administrador.marcas.edit',compact('marca',$marca),compact('tipos_equipos',$tipos_equipos));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MarcaUpdateRequest $request, $id)
    {
        $marca = Marca::find($id);
        $marca->nombre=$request->input("nombre");
        $marca->tipoEquipo_id=$request->input("tipoEquipo_id");
        $marca->save();

        Session::flash('mensaje','Marca equipo actualizada exitósamente');
        return Redirect::to('/marca');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Marca::destroy($id);

        Session::flash('mensaje2','Marca equipo eliminada exitósamente');
        return Redirect::to('/marca');
    }
}
