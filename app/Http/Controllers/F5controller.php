<?php

namespace App\Http\Controllers;

use App\F4;
use App\Marca;
use App\Modelo;
use App\TipoEquipo;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\TemplateProcessor;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class F5controller extends Controller
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
        $tipos_equipos = TipoEquipo::all();
        $marcas = Marca::all();
        $modelos = Modelo::all();
        $f5s = F4::all();
        return view('f5.index')->with('f5s',$f5s)->with("tipos_equipos", $tipos_equipos )->with("marcas",$marcas)->with("modelos",$modelos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function descargar_f5()
    {
        $templateWord = new TemplateProcessor('word/F5 - Listado de equipos.docx');

        $equipos = F4::all();
        $templateWord->cloneBlock('CLONEME',count($equipos));

        $i= 1;
        foreach($equipos as $equipo)
        {
            $templateWord->setValue('tipoEquipo_id',$equipo->tipo_equipo->nombre,$i);
            $templateWord->setValue('nserie',$equipo->nserie,$i);
            $templateWord->setValue('ncertificado',$equipo->ncertificado,$i);
            $templateWord->setValue('ubicacion',$equipo->ubicacion,$i);
            $i++;
        }

        $templateWord->saveAs('word/f5/listado-equipos.docx');

        $ruta = 'word/f5/listado-equipos.docx';

        return response()->download($ruta);


    }
}
