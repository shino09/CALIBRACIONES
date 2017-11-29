<?php

namespace App\Http\Controllers;

use App\F4;
use App\Unidad;
use Illuminate\Http\Request;
use App\TipoEquipo;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Marca;
use App\Modelo;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Input;
use PhpOffice\PhpWord\TemplateProcessor;
use Image;
use App\Http\Requests\F4CreateRequest;

class F4Controller extends Controller
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
        $f4s = F4::all();
        return view('administrador.f4.index')->with("f4s",$f4s);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos_equipos = TipoEquipo::lists('nombre','id');
        $marcas = Marca::lists('nombre','id');
        $modelos = Modelo::lists('nombre','id');
        $unidades = Unidad::lists('nombre','id');

        return view('administrador.f4.create',compact('tipos_equipos','marcas','modelos','unidades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(F4CreateRequest $request)
    {
        if(Input::hasFile('foto'))
        {
            $file = Input::file('foto');
            $image = \Image::make(Input::file('foto'));
            $path = public_path().'/imagenes/equipos/';
            $image->save($path.$file->getClientOriginalName());
        }


        $equipo= new F4();
        $equipo->tipoEquipo_id = $request->input("tipoEquipo_id");
        $equipo->marca_id = $request->input("marca_id");
        $equipo->modelo_id = $request->input("modelo_id");
        $equipo->nserie= $request->input("nserie");
        $equipo->cod_interno=$request->input("cod_interno");
        $equipo->capacidad=$request->input("capacidad");
        $equipo->unidadc_id=$request->input("unidadc_id");
        $equipo->clase_oiml=$request->input("clase_oiml");
        $equipo->error_max=$request->input("error_max");
        $equipo->ubicacion = $request->input("ubicacion");
        $equipo->fcompra=$request->input("fcompra");
        $equipo->norden_compra=$request->input("norden_compra");
        $equipo->proveedor=$request->input("proveedor");
        $equipo->error_max=$request->input("error_max");
        $equipo->intervalo_mantenimiento=$request->input("intervalo_mantenimiento");
        $equipo->pauta_mantencion=$request->input("pauta_mantencion");
        $equipo->intervalo_calibracion=$request->input("intervalo_calibracion");
        $equipo->intervalo_verificacion=$request->input("intervalo_verificacion");
        $equipo->criterio_aceptacion=$request->input("criterio_aceptacion");
        $equipo->observaciones=$request->input("observaciones");
        $equipo->actividad=$request->input("actividad");
        $equipo->f_realizacion=$request->input("f_realizacion");
        $equipo->f_proxima=$request->input("f_proxima");
        $equipo->realizado_por=$request->input("realizado_por");
        $equipo->ncertificado=$request->input("ncertificado");
        $equipo->observacion=$request->input("observacion");
        $equipo->foto = $file->getClientOriginalName();
        $equipo->save();

        return redirect('/f4')->with('mensaje','Equipo registrado exitósamente');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $f4 = F4::find($id);
        return view('f4.show')->with('f4',$f4);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $f4 = F4::find($id);
        $tipos_equipos = TipoEquipo::lists('nombre','id');
        $marcas = Marca::lists('nombre','id');
        $modelos = Modelo::lists('nombre','id');

        return view('f4.edit')->with('f4',$f4)->with('tipos_equipos',$tipos_equipos)->with('marcas',$marcas)->with('modelos',$modelos);
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
        $equipo = F4::find($id);
        if(Input::hasFile('foto'))
        {
            $file = Input::file('foto');
            $file->move(public_path().'/imagenes/equipos/',$file->getClientOriginalName());
            $equipo->foto = $file->getClientOriginalName();
        }

        $equipo->tipoEquipo_id = $request->input("tipoEquipo_id");
        $equipo->marca_id = $request->input("marca_id");
        $equipo->modelo_id = $request->input("modelo_id");
        $equipo->nserie= $request->input("nserie");
        $equipo->cod_interno=$request->input("cod_interno");
        $equipo->capacidad=$request->input("capacidad");
        $equipo->clase_oiml=$request->input("clase_oiml");
        $equipo->error_max=$request->input("error_max");
        $equipo->ubicacion = $request->input("ubicacion");
        $equipo->fcompra=$request->input("fcompra");
        $equipo->norden_compra=$request->input("norden_compra");
        $equipo->proveedor=$request->input("proveedor");
        $equipo->error_max=$request->input("error_max");
        $equipo->intervalo_mantenimiento=$request->input("intervalo_mantenimiento");
        $equipo->pauta_mantencion=$request->input("pauta_mantencion");
        $equipo->intervalo_calibracion=$request->input("intervalo_calibracion");
        $equipo->intervalo_verificacion=$request->input("intervalo_verificacion");
        $equipo->criterio_aceptacion=$request->input("criterio_aceptacion");
        $equipo->observaciones=$request->input("observaciones");
        $equipo->actividad=$request->input("actividad");
        $equipo->f_realizacion=$request->input("f_realizacion");
        $equipo->f_proxima=$request->input("f_proxima");
        $equipo->realizado_por=$request->input("realizado_por");
        $equipo->ncertificado=$request->input("ncertificado");
        $equipo->observacion=$request->input("observacion");
        $equipo->update();

        return redirect('/f4')->with('mensaje','Equipo actualizado exitósamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        F4::destroy($id);

        Session::flash('mensaje2','Equipo eliminado exitósamente');
        return Redirect::to('/f4');
    }

    public function descargar_f4($id)
    {
        $templateWord = new TemplateProcessor('word/F4 - Hoja de vida de equipos.docx');

        $resultado = F4::find($id);

        $templateWord->setValue('tipoEquipo_id', $resultado->tipo_equipo->nombre);
        $templateWord->setValue('marca_id', $resultado->marca->nombre);
        $templateWord->setValue('modelo_id', $resultado->modelo->nombre);
        $templateWord->setValue('nserie', $resultado->nserie);
        $templateWord->setValue('cod_interno', $resultado->cod_interno);
        $templateWord->setValue('capacidad', $resultado->capacidad);
        $templateWord->setValue('clase_oiml', $resultado->clase_oiml);
        $templateWord->setValue('error_max', $resultado->error_max);
        $templateWord->setValue('ubicacion',$resultado->ubicacion);
        $templateWord->setValue('fcompra', $resultado->fcompra);
        $templateWord->setValue('norden_compra', $resultado->norden_compra);
        $templateWord->setValue('proveedor', $resultado->proveedor);
        $templateWord->setValue('intervalo_mantenimiento', $resultado->intervalo_mantenimiento);
        $templateWord->setValue('fecha_mantenimiento', $resultado->fecha_mantenimiento);
        $templateWord->setValue('pauta_mantencion', $resultado->pauta_mantencion);
        $templateWord->setValue('intervalo_calibracion', $resultado->intervalo_calibracion);
        $templateWord->setValue('intervalo_verificacion', $resultado->intervalo_verificacion);
        $templateWord->setValue('criterio_aceptacion', $resultado->criterio_aceptacion);
        $templateWord->setValue('observaciones', $resultado->observaciones);
        $templateWord->setValue('actividad', $resultado->actividad);
        $templateWord->setValue('f_realizacion', $resultado->f_realizacion);
        $templateWord->setValue('f_proxima', $resultado->f_proxima);
        $templateWord->setValue('realizado_por', $resultado->realizado_por);
        $templateWord->setValue('ncertificado', $resultado->ncertificado);
        $templateWord->setValue('observacion', $resultado->observacion);

        $templateWord->saveAs('word/f4/equipo'.$id.'.docx');

        $ruta = 'word/f4/equipo'.$id.'.docx';

        return response()->download($ruta);
    }
}
