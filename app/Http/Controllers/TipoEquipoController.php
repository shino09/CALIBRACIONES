<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\TipoEquipo;
use App\Http\Requests;
use App\Http\Requests\TipoEquipoCreateRequest;
use App\Http\Requests\TipoEquipoUpdateRequest;
use App\Http\Controllers\Controller;

class TipoEquipoController extends Controller
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

    public function index(Request $request)
    {
        if($request)
        {
            $query = trim($request->get('searchText'));
            $tipos_equipos=DB::table('tipos_equipos')
                ->where('nombre','LIKE','%'.$query.'%')
                ->orderBy('nombre','asc')
                ->paginate(25);
            return view('administrador.tipos_equipos.index',["tipos_equipos"=>$tipos_equipos,"searchText"=>$query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrador.tipos_equipos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TipoEquipoCreateRequest $request)
    {
        TipoEquipo::create([
            'nombre' => $request['nombre'],
        ]);

        return Redirect::to('/tipo_equipo')->with('mensaje','Tipo de equipo registrado exitósamente');
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
        $tipo_equipo = TipoEquipo::find($id);
        return view('administrador.tipos_equipos.edit',['tipo_equipo' => $tipo_equipo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TipoEquipoUpdateRequest $request, $id)
    {
        $tipo_equipo = TipoEquipo::find($id);
        $tipo_equipo->fill($request->all());
        $tipo_equipo->save();

        Session::flash('mensaje','Tipo de equipo actualizado exitósamente');
        return Redirect::to('/tipo_equipo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TipoEquipo::destroy($id);

        Session::flash('mensaje2','Tipo de equipo eliminado exitósamente');
        return Redirect::to('/tipo_equipo');
    }
}
