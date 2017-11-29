<?php

namespace App\Http\Controllers;

use App\Balanza;
use App\Bascula;
use App\Masa;
use App\Pesometro;
use Illuminate\Http\Request;
use App\F37;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Http\Requests\CotizadoUpdateRequest;

class CotizadoController extends Controller
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
        if($request) {
            $query = trim($request->get('searchText'));
            $f37s = F37::select('numero', 'cliente_id', 'fecha_solicitud', 'estado', 'created_at')
                ->where('cliente_id', 'LIKE', '%' . $query . '%')
                ->orwhere('created_at', 'LIKE', '%' . $query . '%')
                ->orderBy('numero', 'asc')
                ->paginate(25);
            return view('administrador.cotizado.index',["f37s"=>$f37s,"searchText"=>$query]);
        }
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
    public function edit($numero)
    {
        $f37 = F37::find($numero);

        $bascula = DB::table('basculas as bas')
            ->join('f37s as f','bas.f37_id','=','f.numero')
            ->join('tipos_equipos as ti','bas.tipoEquipo_id','=','ti.id')
            ->join('marcas as ma','bas.marca_id','=','ma.id')
            ->join('modelos as mo','bas.modelo_id','=','mo.id')
            ->join('tipos as t','bas.tipo_id','=','t.id')
            ->join('unidades as uni','bas.unidadc_id','=','uni.id')
            ->join('unidades as unig','bas.unidadg_id','=','unig.id')
            ->join('condiciones as co','bas.condicion_id','=','co.id')
            ->select('bas.cantidad as cantidad','ti.nombre as ti_nombre','ma.nombre as ma_nombre','mo.nombre as mo_nombre','t.nombre as t_nombre','bas.puntos as puntos','bas.pesaje_mop as pesaje_mop','bas.capacidad as capacidad','uni.nombre as uni_nombre','bas.graduacion as graduacion','unig.nombre as unig_nombre','co.nombre as co_nombre','bas.fu_mantencion as mantencion','bas.fu_calibracion as calibracion','bas.v_unitario as unitario','bas.subtotal as subtotal','bas.f_tentativa as tentativa')
            ->where('bas.f37_id','=',$numero)
            ->get();

        $subtotal = DB::table('basculas')
            ->join('f37s', 'f37s.numero', '=', 'basculas.f37_id')
            ->select(DB::raw('sum(basculas.cantidad*basculas.v_unitario) as subtotal'))
            ->where('basculas.f37_id', $numero)
            ->first();

        $balanza = DB::table('balanzas as ba')
            ->join('f37s as f','ba.f37_id','=','f.numero')
            ->join('tipos_equipos as ti','ba.tipoEquipo2_id','=','ti.id')
            ->join('marcas as ma','ba.marca2_id','=','ma.id')
            ->join('modelos as mo','ba.modelo2_id','=','mo.id')
            ->join('tipos as t','ba.tipo2_id','=','t.id')
            ->join('unidades as uni','ba.unidadc2_id','=','uni.id')
            ->join('unidades as unig','ba.unidadg2_id','=','unig.id')
            ->join('condiciones as co','ba.condicion2_id','=','co.id')
            ->select('ba.cantidad2 as cantidad','ti.nombre as ti_nombre','ma.nombre as ma_nombre','mo.nombre as mo_nombre','t.nombre as t_nombre','ba.puntos2 as puntos','ba.capacidad2 as capacidad','uni.nombre as uni_nombre','ba.graduacion2 as graduacion','unig.nombre as unig_nombre','co.nombre as co_nombre','ba.fu_mantencion2 as mantencion','ba.fu_calibracion2 as calibracion','ba.v_unitario2 as unitario','ba.subtotal2 as subtotal','ba.f_tentativa2 as tentativa')
            ->where('ba.f37_id','=',$numero)
            ->get();

        $total2 = DB::table('balanzas as ba')
            ->select(DB::raw('sum(cantidad2*v_unitario2) as totalba'))
            ->where('ba.f37_id','=',$numero)
            ->get();

        $masa = DB::table('masas as m')
            ->join('f37s as f','m.f37_id','=','f.numero')
            ->join('tipos_equipos as ti','m.tipoEquipo3_id','=','ti.id')
            ->join('marcas as ma','m.marca3_id','=','ma.id')
            ->join('modelos as mo','m.modelo3_id','=','mo.id')
            ->join('materiales as mat','m.material_id','=','mat.id')
            ->join('condiciones as co','m.condicion3_id','=','co.id')
            ->select('m.cantidad3 as cantidad','ti.nombre as ti_nombre','ma.nombre as ma_nombre','mo.nombre as mo_nombre','mat.nombre as mat_nombre','m.clase_oiml as clase','co.nombre as co_nombre','m.r_ajuste as ajuste','m.r_mantencion as mantencion','m.v_unitario3 as unitario','m.subtotal3 as subtotal','m.f_tentativa3 as tentativa')
            ->where('m.f37_id','=',$numero)
            ->get();

        $total3 = DB::table('masas as m')
            ->select(DB::raw('sum(cantidad3*v_unitario3) as totalma'))
            ->where('m.f37_id','=',$numero)
            ->get();

        $pesometro = DB::table('pesometros as p')
            ->join('f37s as f','p.f37_id','=','f.numero')
            ->join('tipos_equipos as ti','p.tipoEquipo4_id','=','ti.id')
            ->join('marcas as ma','p.marca4_id','=','ma.id')
            ->join('modelos as mo','p.modelo4_id','=','mo.id')
            ->join('unidades as uni','p.unidadc3_id','=','uni.id')
            ->join('condiciones as co','p.condicion4_id','=','co.id')
            ->select('p.cantidad4 as cantidad','ti.nombre as ti_nombre','ma.nombre as ma_nombre','mo.nombre as mo_nombre','p.rango_uso as rango','p.capacidad3 as capacidad','uni.nombre as uni_nombre','co.nombre as co_nombre','p.fu_mantencion3 as mantencion','p.fu_calibracion3 as calibracion','p.v_unitario4 as unitario','p.subtotal4 as subtotal','p.f_tentativa4 as tentativa')
            ->where('p.f37_id','=',$numero)
            ->get();

        $total4 = DB::table('pesometros as p')
            ->select(DB::raw('sum(cantidad4*v_unitario4) as totalpe'))
            ->where('p.f37_id','=',$numero)
            ->get();

        return view('administrador.cotizado.edit')->with('f37',$f37)->with('bascula',$bascula)->with('balanza',$balanza)->with('masa',$masa)->with('pesometro',$pesometro)->with('subtotal',$subtotal)->with('total2',$total2)->with('total3',$total3)->with('total4',$total4);



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CotizadoUpdateRequest $request, $numero)
    {
        $f37 = F37::find($numero);
        $f37->compra = $request->input('compra');
        if($request->get('compra') == 'si' )
        {

            $f37->nombre_contacto = $request->input('nombre_contacto');
            $f37->fono_contacto = $request->input('fono_contacto');
            $f37->correo_contacto = $request->input('correo_contacto');
            $f37->direccion_cliente = $request->input('direccion_cliente');
            $f37->direccion_envio = $request->input('direccion_envio');
            $f37->ciudad_envio = $request->input('ciudad_envio');
            $f37->direccion_despacho = $request->input('direccion_despacho');
            $f37->nota_venta = $request->input('nota_venta');
            $f37->orden_compra = $request->input('orden_compra');


            $total = $f37->vt_cotizado;
            $f37->monto_neto2= 0.19;
            $iva = $total * 0.19;
            $neto = $total-$iva;
            $f37->monto_neto = $neto;
            $diferencia = $total-$neto;

            $f37->diferencia = $diferencia;

            $f37->estado = 'finalizado';
            $f37->created_at = Carbon::now();

            $bascula = DB::table('basculas as bas')
                ->join('f37s as f','bas.f37_id','=','f.numero')
                ->join('tipos_equipos as ti','bas.tipoEquipo_id','=','ti.id')
                ->join('marcas as ma','bas.marca_id','=','ma.id')
                ->join('modelos as mo','bas.modelo_id','=','mo.id')
                ->join('tipos as t','bas.tipo_id','=','t.id')
                ->join('unidades as uni','bas.unidadc_id','=','uni.id')
                ->join('unidades as unig','bas.unidadg_id','=','unig.id')
                ->join('condiciones as co','bas.condicion_id','=','co.id')
                ->select('bas.cantidad as cantidad','ti.nombre as ti_nombre','ma.nombre as ma_nombre','mo.nombre as mo_nombre','t.nombre as t_nombre','bas.puntos as puntos','bas.pesaje_mop as pesaje_mop','bas.capacidad as capacidad','uni.nombre as uni_nombre','bas.graduacion as graduacion','unig.nombre as unig_nombre','co.nombre as co_nombre','bas.fu_mantencion as mantencion','bas.fu_calibracion as calibracion','bas.v_unitario as unitario','bas.subtotal as subtotal','bas.f_tentativa as tentativa')
                ->where('bas.f37_id','=',$numero)
                ->get();

            $balanza = DB::table('balanzas as ba')
                ->join('f37s as f','ba.f37_id','=','f.numero')
                ->join('tipos_equipos as ti','ba.tipoEquipo2_id','=','ti.id')
                ->join('marcas as ma','ba.marca2_id','=','ma.id')
                ->join('modelos as mo','ba.modelo2_id','=','mo.id')
                ->join('tipos as t','ba.tipo2_id','=','t.id')
                ->join('unidades as uni','ba.unidadc2_id','=','uni.id')
                ->join('unidades as unig','ba.unidadg2_id','=','unig.id')
                ->join('condiciones as co','ba.condicion2_id','=','co.id')
                ->select('ba.cantidad2 as cantidad','ti.nombre as ti_nombre','ma.nombre as ma_nombre','mo.nombre as mo_nombre','t.nombre as t_nombre','ba.puntos2 as puntos','ba.capacidad2 as capacidad','uni.nombre as uni_nombre','ba.graduacion2 as graduacion','unig.nombre as unig_nombre','co.nombre as co_nombre','ba.fu_mantencion2 as mantencion','ba.fu_calibracion2 as calibracion','ba.v_unitario2 as unitario','ba.subtotal2 as subtotal','ba.f_tentativa2 as tentativa')
                ->where('ba.f37_id','=',$numero)
                ->get();

            $masa = DB::table('masas as m')
                ->join('f37s as f','m.f37_id','=','f.numero')
                ->join('tipos_equipos as ti','m.tipoEquipo3_id','=','ti.id')
                ->join('marcas as ma','m.marca3_id','=','ma.id')
                ->join('modelos as mo','m.modelo3_id','=','mo.id')
                ->join('materiales as mat','m.material_id','=','mat.id')
                ->join('condiciones as co','m.condicion3_id','=','co.id')
                ->select('m.cantidad3 as cantidad','ti.nombre as ti_nombre','ma.nombre as ma_nombre','mo.nombre as mo_nombre','mat.nombre as mat_nombre','m.clase_oiml as clase','co.nombre as co_nombre','m.r_ajuste as ajuste','m.r_mantencion as mantencion','m.v_unitario3 as unitario','m.subtotal3 as subtotal','m.f_tentativa3 as tentativa')
                ->where('m.f37_id','=',$numero)
                ->get();

            $pesometro = DB::table('pesometros as p')
                ->join('f37s as f','p.f37_id','=','f.numero')
                ->join('tipos_equipos as ti','p.tipoEquipo4_id','=','ti.id')
                ->join('marcas as ma','p.marca4_id','=','ma.id')
                ->join('modelos as mo','p.modelo4_id','=','mo.id')
                ->join('unidades as uni','p.unidadc3_id','=','uni.id')
                ->join('condiciones as co','p.condicion4_id','=','co.id')
                ->select('p.cantidad4 as cantidad','ti.nombre as ti_nombre','ma.nombre as ma_nombre','mo.nombre as mo_nombre','p.rango_uso as rango','p.capacidad3 as capacidad','uni.nombre as uni_nombre','co.nombre as co_nombre','p.fu_mantencion3 as mantencion','p.fu_calibracion3 as calibracion','p.v_unitario4 as unitario','p.subtotal4 as subtotal','p.f_tentativa4 as tentativa')
                ->where('p.f37_id','=',$numero)
                ->get();

            $f37->update();

            return redirect('/cotizado')->with('mensaje','Solicitud de compra finalizada exitósamente')->with('bascula',$bascula)->with('balanza',$balanza)->with('masa',$masa)->with('pesometro',$pesometro);
        }

        else if($request->get('compra') == 'no' )
        {
            $f37->estado = 'Pérdida';

            $f37->created_at = Carbon::now();
            $f37->update();

            $bascula = DB::table('basculas as bas')
                ->join('f37s as f','bas.f37_id','=','f.numero')
                ->join('tipos_equipos as ti','bas.tipoEquipo_id','=','ti.id')
                ->join('marcas as ma','bas.marca_id','=','ma.id')
                ->join('modelos as mo','bas.modelo_id','=','mo.id')
                ->join('tipos as t','bas.tipo_id','=','t.id')
                ->join('unidades as uni','bas.unidadc_id','=','uni.id')
                ->join('unidades as unig','bas.unidadg_id','=','unig.id')
                ->join('condiciones as co','bas.condicion_id','=','co.id')
                ->select('bas.cantidad as cantidad','ti.nombre as ti_nombre','ma.nombre as ma_nombre','mo.nombre as mo_nombre','t.nombre as t_nombre','bas.puntos as puntos','bas.pesaje_mop as pesaje_mop','bas.capacidad as capacidad','uni.nombre as uni_nombre','bas.graduacion as graduacion','unig.nombre as unig_nombre','co.nombre as co_nombre','bas.fu_mantencion as mantencion','bas.fu_calibracion as calibracion','bas.v_unitario as unitario','bas.subtotal as subtotal','bas.f_tentativa as tentativa')
                ->where('bas.f37_id','=',$numero)
                ->get();

            $balanza = DB::table('balanzas as ba')
                ->join('f37s as f','ba.f37_id','=','f.numero')
                ->join('tipos_equipos as ti','ba.tipoEquipo2_id','=','ti.id')
                ->join('marcas as ma','ba.marca2_id','=','ma.id')
                ->join('modelos as mo','ba.modelo2_id','=','mo.id')
                ->join('tipos as t','ba.tipo2_id','=','t.id')
                ->join('unidades as uni','ba.unidadc2_id','=','uni.id')
                ->join('unidades as unig','ba.unidadg2_id','=','unig.id')
                ->join('condiciones as co','ba.condicion2_id','=','co.id')
                ->select('ba.cantidad2 as cantidad','ti.nombre as ti_nombre','ma.nombre as ma_nombre','mo.nombre as mo_nombre','t.nombre as t_nombre','ba.puntos2 as puntos','ba.capacidad2 as capacidad','uni.nombre as uni_nombre','ba.graduacion2 as graduacion','unig.nombre as unig_nombre','co.nombre as co_nombre','ba.fu_mantencion2 as mantencion','ba.fu_calibracion2 as calibracion','ba.v_unitario2 as unitario','ba.subtotal2 as subtotal','ba.f_tentativa2 as tentativa')
                ->where('ba.f37_id','=',$numero)
                ->get();

            $masa = DB::table('masas as m')
                ->join('f37s as f','m.f37_id','=','f.numero')
                ->join('tipos_equipos as ti','m.tipoEquipo3_id','=','ti.id')
                ->join('marcas as ma','m.marca3_id','=','ma.id')
                ->join('modelos as mo','m.modelo3_id','=','mo.id')
                ->join('materiales as mat','m.material_id','=','mat.id')
                ->join('condiciones as co','m.condicion3_id','=','co.id')
                ->select('m.cantidad3 as cantidad','ti.nombre as ti_nombre','ma.nombre as ma_nombre','mo.nombre as mo_nombre','mat.nombre as mat_nombre','m.clase_oiml as clase','co.nombre as co_nombre','m.r_ajuste as ajuste','m.r_mantencion as mantencion','m.v_unitario3 as unitario','m.subtotal3 as subtotal','m.f_tentativa3 as tentativa')
                ->where('m.f37_id','=',$numero)
                ->get();

            $pesometro = DB::table('pesometros as p')
                ->join('f37s as f','p.f37_id','=','f.numero')
                ->join('tipos_equipos as ti','p.tipoEquipo4_id','=','ti.id')
                ->join('marcas as ma','p.marca4_id','=','ma.id')
                ->join('modelos as mo','p.modelo4_id','=','mo.id')
                ->join('unidades as uni','p.unidadc3_id','=','uni.id')
                ->join('condiciones as co','p.condicion4_id','=','co.id')
                ->select('p.cantidad4 as cantidad','ti.nombre as ti_nombre','ma.nombre as ma_nombre','mo.nombre as mo_nombre','p.rango_uso as rango','p.capacidad3 as capacidad','uni.nombre as uni_nombre','co.nombre as co_nombre','p.fu_mantencion3 as mantencion','p.fu_calibracion3 as calibracion','p.v_unitario4 as unitario','p.subtotal4 as subtotal','p.f_tentativa4 as tentativa')
                ->where('p.f37_id','=',$numero)
                ->get();

            return redirect('/cotizado')->with('mensaje','Solicitud de compra perdida')->with('bascula',$bascula)->with('balanza',$balanza)->with('masa',$masa)->with('pesometro',$pesometro);
        }
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
}
