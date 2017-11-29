<?php

namespace App\Http\Controllers;

use Auth;
use App\F37;
use App\Masa;
use App\Pesometro;
use App\TipoEquipo;
use App\Condicion;
use App\Marca;
use App\Material;
use App\Modelo;
use App\Tipo;
use App\Bascula;
use App\Balanza;
use App\Unidad;
use App\Cliente;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Session;
use App\Http\Requests\F37CreateRequest;
use Response;
use PDF;



class F37Controller extends Controller
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

        $f37s = F37::all();
        $clientes = Cliente::all();
        $vendedores = User::all();
        return view('administrador.f37.index',["f37s"=>$f37s,"clientes"=>$clientes,"vendedores"=>$vendedores]);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clientes = DB::table('clientes as cl')
            ->select('cl.id','cl.nombre')
            ->where('cl.estado','=','Activo')
            ->get();
        $tipos_equipos = DB::table('tipos_equipos as te')
            ->select('te.id','te.nombre')
            ->where('te.id','=',1)
            ->get();
        $marcas = DB::table('marcas as ma')
            ->join('tipos_equipos as te','ma.tipoEquipo_id','=','te.id')
            ->select('ma.id','ma.nombre')
            ->where('ma.tipoEquipo_id','=',1)
            ->get();
        $modelos = DB::table('modelos as mo')
            ->join('marcas as ma','mo.marca_id','=','ma.id')
            ->select('mo.id','mo.nombre')
            ->get();
        $tipos = DB::table('tipos as t')
            ->join('tipos_equipos as te','t.tipoEquipo_id','=','te.id')
            ->select('t.id','t.nombre')
            ->where('t.tipoEquipo_id','=',1)
            ->get();
        $unidadesc = DB::table('unidades as u')
            ->join('tipos_equipos as te','u.tipoEquipo_id','=','te.id')
            ->select('u.id','u.nombre')
            ->where('u.tipoEquipo_id','=',1)
            ->get();
        $unidadesg = DB::table('unidades as u2')
            ->join('tipos_equipos as te','u2.tipoEquipo_id','=','te.id')
            ->select('u2.id','u2.nombre')
            ->where('u2.tipoEquipo_id','=',1)
            ->get();
        $condiciones = DB::table('condiciones as c')
            ->join('tipos_equipos as te','c.tipoEquipo_id','=','te.id')
            ->select('c.id','c.nombre')
            ->where('c.tipoEquipo_id','=',1)
            ->get();
        $tipos_equipos2 = DB::table('tipos_equipos as te')
            ->select('te.id','te.nombre')
            ->where('te.id','=',2)
            ->get();
        $marcas2 = DB::table('marcas as ma')
            ->join('tipos_equipos as te','ma.tipoEquipo_id','=','te.id')
            ->select('ma.id','ma.nombre')
            ->where('ma.tipoEquipo_id','=',2)
            ->get();
        $modelos2 = DB::table('modelos as mo')
            ->join('marcas as ma','mo.marca_id','=','ma.id')
            ->select('mo.id','mo.nombre')
            ->get();
        $tipos2 = DB::table('tipos as t')
            ->join('tipos_equipos as te','t.tipoEquipo_id','=','te.id')
            ->select('t.id','t.nombre')
            ->where('t.tipoEquipo_id','=',2)
            ->get();
        $unidadesc2 = DB::table('unidades as u')
            ->join('tipos_equipos as te','u.tipoEquipo_id','=','te.id')
            ->select('u.id','u.nombre')
            ->where('u.tipoEquipo_id','=',2)
            ->get();
        $unidadesg2 = DB::table('unidades as u2')
            ->join('tipos_equipos as te','u2.tipoEquipo_id','=','te.id')
            ->select('u2.id','u2.nombre')
            ->where('u2.tipoEquipo_id','=',2)
            ->get();
        $condiciones2 = DB::table('condiciones as c')
            ->join('tipos_equipos as te','c.tipoEquipo_id','=','te.id')
            ->select('c.id','c.nombre')
            ->where('c.tipoEquipo_id','=',2)
            ->get();
        $tipos_equipos3 = DB::table('tipos_equipos as te')
            ->select('te.id','te.nombre')
            ->where('te.id','=',3)
            ->get();
        $marcas3 = DB::table('marcas as ma')
            ->join('tipos_equipos as te','ma.tipoEquipo_id','=','te.id')
            ->select('ma.id','ma.nombre')
            ->where('ma.tipoEquipo_id','=',3)
            ->get();
        $modelos3 = DB::table('modelos as mo')
            ->join('marcas as ma','mo.marca_id','=','ma.id')
            ->select('mo.id','mo.nombre')
            ->get();
        $materiales = DB::table('materiales as m')
            ->join('tipos_equipos as te','m.tipoEquipo_id','=','te.id')
            ->select('m.id','m.nombre')
            ->where('m.tipoEquipo_id','=',3)
            ->get();
        $condiciones3 = DB::table('condiciones as c')
            ->join('tipos_equipos as te','c.tipoEquipo_id','=','te.id')
            ->select('c.id','c.nombre')
            ->where('c.tipoEquipo_id','=',3)
            ->get();
        $tipos_equipos4 = DB::table('tipos_equipos as te')
            ->select('te.id','te.nombre')
            ->where('te.id','=',4)
            ->get();
        $marcas4 = DB::table('marcas as ma')
            ->join('tipos_equipos as te','ma.tipoEquipo_id','=','te.id')
            ->select('ma.id','ma.nombre')
            ->where('ma.tipoEquipo_id','=',4)
            ->get();
        $modelos4 = DB::table('modelos as mo')
            ->join('marcas as ma','mo.marca_id','=','ma.id')
            ->select('mo.id','mo.nombre')
            ->get();
        $unidadesc3 = DB::table('unidades as u')
            ->join('tipos_equipos as te','u.tipoEquipo_id','=','te.id')
            ->select('u.id','u.nombre')
            ->where('u.tipoEquipo_id','=',4)
            ->get();
        $condiciones4 = DB::table('condiciones as c')
            ->join('tipos_equipos as te','c.tipoEquipo_id','=','te.id')
            ->select('c.id','c.nombre')
            ->where('c.tipoEquipo_id','=',4)
            ->get();
        $sql = mysqli_connect('localhost','root','','sistema');
        $consulta = mysqli_query($sql,'SELECT MAX(numero)as numero FROM f37s LIMIT 1');
        $consulta = mysqli_fetch_array($consulta,MYSQLI_ASSOC);
        $codigo = (empty($consulta['numero']) ? 1 : $consulta['numero']+1);
        $fecha_solicitud = Carbon::now();
        $fecha_solicitud = $fecha_solicitud->format('Y-m-d');

        return view('administrador.f37.create',["codigo" => $codigo, "fecha_solicitud" => $fecha_solicitud, "clientes" => $clientes, "tipos_equipos" => $tipos_equipos, "marcas" => $marcas, "modelos" => $modelos, "tipos" => $tipos, "unidadesc" => $unidadesc, "unidadesg" => $unidadesg, "condiciones" => $condiciones, "tipos_equipos2" => $tipos_equipos2, "marcas2" =>$marcas2, "modelos2" => $modelos2, "tipos2" => $tipos2, "unidadesc2" => $unidadesc2, "unidadesg2" => $unidadesg2, "condiciones2" => $condiciones2, "tipos_equipos3" => $tipos_equipos3, "marcas3" =>$marcas3, "modelos3" => $modelos3, "materiales" => $materiales, "condiciones3" => $condiciones3, "tipos_equipos4" => $tipos_equipos4, "marcas4" => $marcas4, "modelos4" => $modelos4, "unidadesc3" => $unidadesc3, "condiciones4" => $condiciones4]);
    }

    public function getMarcas(Request $request, $id)
    {
        if($request->ajax()){
            $marcas = Marca::marca($id);
            return response()->json($marcas);
        }
    }

    public function getModelos(Request $request,$id)
    {
        if($request->ajax()){
            $modelos = Modelo::modelo($id);
            return response()->json($modelos);
        }
    }

    public function getTipos(Request $request,$id)
    {
        if($request->ajax()){
            $tipos = Tipo::tipo($id);
            return response()->json($tipos);
        }
    }

    public function getUnidades(Request $request,$id)
    {
        if($request->ajax()){
            $unidades = Unidad::unidad($id);
            return response()->json($unidades);
        }
    }

    public function getCondiciones(Request $request,$id)
    {
        if($request->ajax()){
            $condiciones = Condicion::condicion($id);
            return response()->json($condiciones);
        }
    }

    public function getMateriales(Request $request,$id)
    {
        if($request->ajax()){
            $materiales = Material::material($id);
            return response()->json($materiales);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(F37CreateRequest $request)
    {
        $f37 = new F37();
        $f37->fecha_solicitud = Carbon::now();
        $f37->vendedor_id=Auth::user()->id;
        $f37->cliente_id = $request->input('cliente_id');
        $f37->comuna_servicio = $request->input('comuna_servicio');
        $f37->lugar_servicio = $request->input('lugar_servicio');
        $f37->nombre_contacto = $request->input('nombre_contacto');
        $f37->fono_contacto = $request->input('fono_contacto');
        $f37->correo_contacto = $request->input('correo_contacto');
        $f37->direccion_cliente = $request->input('direccion_cliente');
        $f37->direccion_envio = $request->input('direccion_envio');
        $f37->ciudad_envio = $request->input('ciudad_envio');
        $f37->direccion_despacho = $request->input('direccion_despacho');
        $f37->nota_venta = $request->input('nota_venta');
        $f37->orden_compra = $request->input('orden_compra');
        $f37->tipo_cliente = implode($request->tipo_cliente, ',');
        $f37->observaciones = $request->input('observaciones');
        $f37->comunicacion = $request->input('comunicacion');
        $f37->pregunta1 = $request->input('pregunta1');
        $f37->pregunta2 = $request->input('pregunta2');
        $f37->pregunta3 = $request->input('pregunta3');
        $f37->nfactura = $request->input('nfactura');
        $f37->monto_neto = $request->input('monto_neto');
        $f37->it = $request->input('it');
        $f37->vt_cotizado = $request->input('vt_cotizado');
        $f37->monto_neto2 = $request->input('monto_neto2');
        $f37->diferencia = $request->input('diferencia');
        $f37->estado = 'Solicitada';
        $f37->save();

        $numero=$f37->numero;
        $idTipoEquipo = $request->get('tipoEquipo_id');
        $cantidad = $request->get('cantidad');
        $marca_id = $request->get('marca_id');
        $modelo_id = $request->get('modelo_id');
        $tipo_id = $request->get('tipo_id');
        $puntos = $request->get('puntos');
        $pesaje_mop = $request->get('pesaje_mop');
        $capacidad = $request->get('capacidad');
        $unidadc_id = $request->get('unidadc_id');
        $graduacion = $request->get('graduacion');
        $unidadg_id = $request->get('unidadg_id');
        $condicion_id = $request->get('condicion_id');
        $fu_mantencion = $request->get('fu_mantencion');
        $fu_calibracion = $request->get('fu_calibracion');
        $v_unitario = $request->get('v_unitario');
        $subtotal=$request->get('subtotal');
        $totalbas=$request->get('totalbas');
        $f_tentativa = $request->get('f_tentativa');

        $cont = 0;

        while($cont<count($idTipoEquipo)){

                $bascula = new Bascula();
                $bascula->f37_id = $numero;
                $bascula->cantidad = $cantidad[$cont];
                $bascula->tipoEquipo_id = $idTipoEquipo[$cont];
                $bascula->marca_id = $marca_id[$cont];
                $bascula->modelo_id = $modelo_id{$cont};
                $bascula->tipo_id = $tipo_id[$cont];
                $bascula->puntos = $puntos[$cont];
                $bascula->pesaje_mop = $pesaje_mop[$cont];
                $bascula->capacidad = $capacidad[$cont];
                $bascula->unidadc_id = $unidadc_id[$cont];
                $bascula->graduacion = $graduacion[$cont];
                $bascula->unidadg_id = $unidadg_id[$cont];
                $bascula->condicion_id = $condicion_id[$cont];
                $bascula->fu_mantencion = $fu_mantencion[$cont];
                $bascula->fu_calibracion = $fu_calibracion[$cont];
                $bascula->v_unitario = $v_unitario[$cont];
                $bascula->subtotal=$subtotal[$cont];
                $bascula->totalbas=$totalbas[$cont];
                $bascula->f_tentativa = $f_tentativa[$cont];
                $bascula->save();


            $cont = $cont +1;
        }

        $idTipoEquipo2 = $request->get('tipoEquipo2_id');
        $cantidad2 = $request->get('cantidad2');
        $marca2_id = $request->get('marca2_id');
        $modelo2_id = $request->get('modelo2_id');
        $tipo2_id = $request->get('tipo2_id');
        $puntos2 = $request->get('puntos2');
        $capacidad2 = $request->get('capacidad2');
        $unidadc2_id = $request->get('unidadc2_id');
        $graduacion2 = $request->get('graduacion2');
        $unidadg2_id = $request->get('unidadg2_id');
        $condicion2_id = $request->get('condicion2_id');
        $fu_mantencion2 = $request->get('fu_mantencion2');
        $fu_calibracion2 = $request->get('fu_calibracion2');
        $v_unitario2 = $request->get('v_unitario2');
        $subtotal2=$request->get('subtotal2');
        $f_tentativa2 = $request->get('f_tentativa2');

        $cont2 = 0;

        while($cont2<count($idTipoEquipo2)){

                $balanza = new Balanza();
                $balanza->f37_id = $f37->numero;
                $balanza->cantidad2 = $cantidad2[$cont2];
                $balanza->tipoEquipo2_id = $idTipoEquipo2[$cont2];
                $balanza->marca2_id = $marca2_id[$cont2];
                $balanza->modelo2_id = $modelo2_id{$cont2};
                $balanza->tipo2_id = $tipo2_id[$cont2];
                $balanza->puntos2 = $puntos2[$cont2];
                $balanza->capacidad2 = $capacidad2[$cont2];
                $balanza->unidadc2_id = $unidadc2_id[$cont2];
                $balanza->graduacion2 = $graduacion2[$cont2];
                $balanza->unidadg2_id = $unidadg2_id[$cont2];
                $balanza->condicion2_id = $condicion2_id[$cont2];
                $balanza->fu_mantencion2 = $fu_mantencion2[$cont2];
                $balanza->fu_calibracion2 = $fu_calibracion2[$cont2];
                $balanza->v_unitario2 = $v_unitario2[$cont2];
                $balanza->subtotal2=$subtotal2[$cont2];
                $balanza->f_tentativa2 = $f_tentativa2[$cont2];
                $balanza->save();

            $cont2 = $cont2 +1;
        }

        $idTipoEquipo3 = $request->get('tipoEquipo3_id');
        $cantidad3 = $request->get('cantidad3');
        $marca3_id = $request->get('marca3_id');
        $modelo3_id = $request->get('modelo3_id');
        $material_id = $request->get('material_id');
        $clase_oiml = $request->get('clase_oiml');
        $condicion3_id = $request->get('condicion3_id');
        $r_ajuste = $request->get('r_ajuste');
        $r_mantencion = $request->get('r_mantencion');
        $v_unitario3 = $request->get('v_unitario3');
        $subtotal3= $request->get('subtotal3');
        $f_tentativa3 = $request->get('f_tentativa3');

        $cont3 = 0;

        while($cont3<count($idTipoEquipo3)){

                $masa = new Masa();
                $masa->f37_id = $f37->numero;
                $masa->cantidad3 = $cantidad3[$cont3];
                $masa->tipoEquipo3_id = $idTipoEquipo3[$cont3];
                $masa->marca3_id = $marca3_id[$cont3];
                $masa->modelo3_id = $modelo3_id{$cont3};
                $masa->material_id = $material_id[$cont3];
                $masa->clase_oiml = $clase_oiml[$cont3];
                $masa->condicion3_id = $condicion3_id[$cont3];
                $masa->r_ajuste = $r_ajuste[$cont3];
                $masa->r_mantencion = $r_mantencion[$cont3];
                $masa->v_unitario3 = $v_unitario3[$cont3];
                $masa->subtotal3 = $subtotal3[$cont3];
                $masa->f_tentativa3 = $f_tentativa3[$cont3];
                $masa->save();

            $cont3 = $cont3 +1;
        }

        $idTipoEquipo4 = $request->get('tipoEquipo4_id');
        $cantidad4 = $request->get('cantidad4');
        $marca4_id = $request->get('marca4_id');
        $modelo4_id = $request->get('modelo4_id');
        $rango_uso = $request->get('rango_uso');
        $capacidad3 = $request->get('capacidad3');
        $unidadc3_id = $request->get('unidadc3_id');
        $condicion4_id = $request->get('condicion4_id');
        $fu_mantencion3 = $request->get('fu_mantencion3');
        $fu_calibracion3 = $request->get('fu_calibracion3');
        $v_unitario4 = $request->get('v_unitario4');
        $subtotal4 = $request->get('subtotal4');
        $f_tentativa4 = $request->get('f_tentativa4');

        $cont4 = 0;

        while($cont4<count($idTipoEquipo4)){

                $pesometro = new Pesometro();
                $pesometro->f37_id = $f37->numero;
                $pesometro->cantidad4 = $cantidad4[$cont4];
                $pesometro->tipoEquipo4_id = $idTipoEquipo4[$cont4];
                $pesometro->marca4_id = $marca4_id[$cont4];
                $pesometro->modelo4_id = $modelo4_id{$cont4};
                $pesometro->rango_uso = $rango_uso[$cont4];
                $pesometro->capacidad3 = $capacidad3[$cont4];
                $pesometro->unidadc3_id = $unidadc3_id[$cont4];
                $pesometro->condicion4_id = $condicion4_id[$cont4];
                $pesometro->fu_mantencion3 = $fu_mantencion3[$cont4];
                $pesometro->fu_calibracion3 = $fu_calibracion3[$cont4];
                $pesometro->v_unitario4 = $v_unitario4[$cont4];
                $pesometro->subtotal4=$subtotal4[$cont4];
                $pesometro->f_tentativa4 = $f_tentativa4[$cont4];
                $pesometro->save();

            $cont4 = $cont4 +1;
        }
        return redirect('/f37')->with('mensaje','Solicitud de compra registrada exitósamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($numero){
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
            ->select('bas.cantidad as cantidad','ti.nombre as ti_nombre','ma.nombre as ma_nombre','mo.nombre as mo_nombre','t.nombre as t_nombre','bas.puntos as puntos','bas.pesaje_mop as pesaje_mop','bas.capacidad as capacidad','uni.nombre as uni_nombre','bas.graduacion as graduacion','unig.nombre as unig_nombre','co.nombre as co_nombre','bas.fu_mantencion as mantencion','bas.fu_calibracion as calibracion','bas.v_unitario as unitario','bas.f_tentativa as tentativa')
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
            ->select('ba.cantidad2 as cantidad','ti.nombre as ti_nombre','ma.nombre as ma_nombre','mo.nombre as mo_nombre','t.nombre as t_nombre','ba.puntos2 as puntos','ba.capacidad2 as capacidad','uni.nombre as uni_nombre','ba.graduacion2 as graduacion','unig.nombre as unig_nombre','co.nombre as co_nombre','ba.fu_mantencion2 as mantencion','ba.fu_calibracion2 as calibracion','ba.v_unitario2 as unitario','ba.f_tentativa2 as tentativa')
            ->where('ba.f37_id','=',$numero)
            ->get();

        $masa = DB::table('masas as m')
            ->join('f37s as f','m.f37_id','=','f.numero')
            ->join('tipos_equipos as ti','m.tipoEquipo3_id','=','ti.id')
            ->join('marcas as ma','m.marca3_id','=','ma.id')
            ->join('modelos as mo','m.modelo3_id','=','mo.id')
            ->join('materiales as mat','m.material_id','=','mat.id')
            ->join('condiciones as co','m.condicion3_id','=','co.id')
            ->select('m.cantidad3 as cantidad','ti.nombre as ti_nombre','ma.nombre as ma_nombre','mo.nombre as mo_nombre','mat.nombre as mat_nombre','m.clase_oiml as clase','co.nombre as co_nombre','m.r_ajuste as ajuste','m.r_mantencion as mantencion','m.v_unitario3 as unitario','m.f_tentativa3 as tentativa')
            ->where('m.f37_id','=',$numero)
            ->get();

        $pesometro = DB::table('pesometros as p')
            ->join('f37s as f','p.f37_id','=','f.numero')
            ->join('tipos_equipos as ti','p.tipoEquipo4_id','=','ti.id')
            ->join('marcas as ma','p.marca4_id','=','ma.id')
            ->join('modelos as mo','p.modelo4_id','=','mo.id')
            ->join('unidades as uni','p.unidadc3_id','=','uni.id')
            ->join('condiciones as co','p.condicion4_id','=','co.id')
            ->select('p.cantidad4 as cantidad','ti.nombre as ti_nombre','ma.nombre as ma_nombre','mo.nombre as mo_nombre','p.rango_uso as rango','p.capacidad3 as capacidad','uni.nombre as uni_nombre','co.nombre as co_nombre','p.fu_mantencion3 as mantencion','p.fu_calibracion3 as calibracion','p.v_unitario4 as unitario','p.f_tentativa4 as tentativa')
            ->where('p.f37_id','=',$numero)
            ->get();

        return view('administrador.f37.show')->with('f37',$f37)->with('bascula',$bascula)->with('balanza',$balanza)->with('masa',$masa)->with('pesometro',$pesometro);
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
    public function update(Request $request, $numero)
    {

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
