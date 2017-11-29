@extends('...administrador.home')
    @section('contenido')
        {!!Form::open(['url' => '/f37','method' => 'POST'])!!}
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Ingresar nueva solicitud</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="id" class="col-md-2 control-label">N°:</label>
                                <input type="text" class="form-control input" id="numero" name="numero" value="<?= $codigo?>"disabled style="width: 300px;">
                            </div>
                            <div class="form-group">
                                <label for="fecha_solicitud" class="col-md-2 control-label">Fecha solicitud:</label>
                                <input type="date" class="form-control input" id="fecha_solicitud" name="fecha_solicitud" value="<?= $fecha_solicitud; ?>"  disabled style="width: 300px;">
                            </div>
                            <div class="form-group">
                                <label for="id_usuario" class="col-md-2 control-label">Vendedor:</label>
                                <input type="text" class="form-control input" name="id_vendedor" disabled style="width: 300px;" value="<?= Auth::user()->name ?> <?= Auth::user()->apellido_paterno?>" >
                            </div>
                            <div class="form-group">
                                <label for="cliente_id" class="col-md-2 control-label">Cliente</label>
                                <select name="cliente_id" id="cliente_id" class="cliente_id" style="width: 300px;">
                                    <option value="0" selected="true" disabled="true" class="form-control" style="height: 26px; text-align: center; margin:0px;">Seleccione</option>
                                    @foreach($clientes as $cliente)
                                        <option value="{{$cliente->id}}">{{$cliente->nombre}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('cliente_id'))
                                <div class="form-group">
                                    <span class="help-block">
                                        <p style="color: red;">{{ $errors->first('cliente_id') }}</p>
                                    </span>
                                </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="comuna_servicio" class="col-xs-2 control-label">Comuna servicio</label>
                                <input type="text" class="form-control input" id="comuna_servicio" name="comuna_servicio" style="width: 300px;">
                                @if ($errors->has('comuna_servicio'))
                                <div class="form-group">
                                    <span class="help-block">
                                        <p style="color: red;">{{ $errors->first('comuna_servicio') }}</p>
                                    </span>
                                </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="lugar_servicio" class="col-xs-2 control-label">Lugar del servicio</label>
                                <input type="text" class="form-control input" id="lugar_servicio" name="lugar_servicio" style="width: 300px;">
                                @if ($errors->has('lugar_servicio'))
                                <div class="form-group">
                                    <span class="help-block">
                                        <p style="color: red;">{{ $errors->first('lugar_servicio') }}</p>
                                    </span>
                                </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <p class="text-black" style="text-align: center;">LAS FECHAS QUE SE ENCUENTREN RESERVADAS DEBEN SER CONFIRMADAS 5 DIAS HABILES ANTES DEL SERVICIO, DE LO CONTRARIO SE ANULARÁ EL SERVICIO</p>
                            </div>
                            <div class="form-group">
                                <label>Seleccione tipo plan cliente: </label>
                                <input type="checkbox" value="contrato" name="tipo_cliente[]"/>C/Contrato
                                <input type="checkbox" value="cplan" name="tipo_cliente[]" />C/Plan
                                <input type="checkbox" value="splan" name="tipo_cliente[]" />S/Plan
                                @if ($errors->has('tipo_cliente'))
                                <div class="form-group">
                                    <span class="help-block">
                                        <p style="color: red;">{{ $errors->first('tipo_cliente') }}</p>
                                    </span>
                                </div>
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Seleccione tipo equipo: </label>
                                <input type="checkbox" value="1" name="check" id="check" onclick="javascript:showContent();"/>Báscula
                                <input type="checkbox" value="2" name="check2" id="check2" onclick="javascript:showContent2();"/>Balanza
                                <input type="checkbox" value="3" name="check3" id="check3" onclick="javascript:showContent3();"/>Masa
                                <input type="checkbox" value="4" name="check4" id="check4" onclick="javascript:showContent4();"/>Pesómetro
                            </div>
                            <div class="form-group">
<div class="panel panel-default" id="content" style="display: none; overflow: auto;">
                    <div class="panel-body">
                        <div class="col-lg-1 col-sm-1 col-md-1 col-xs-1">
                            <table>
                                <thead>
                                    <tr>
                                        <th style="text-align: center;"><label>Tipo Equipo</label></th>
                                        <th style="text-align: center;"><label>Cantidad</label></th>
                                        <th style="text-align: center;">Marca</th>
                                        <th style="text-align: center;">Modelo</th>
                                        <th style="text-align: center;">Tipo</th>
                                        <th style="text-align: center;">Puntos</th>
                                        <th style="text-align: center;">Pesaje Mop</th>
                                        <th style="text-align: center;">Cap.</th>
                                        <th style="text-align: center;">Unidad Cap.</th>
                                        <th style="text-align: center;">Grad.</th>
                                        <th style="text-align: center;">Unidad Grad.</th>
                                        <th style="text-align: center;">Condición</th>
                                        <th style="text-align: center;">Fecha Última Mantención</th>
                                        <th style="text-align: center;">Fecha Última Cal.</th>
                                        <th style="text-align: center;">Fecha Tentativa</th>
                                    </tr>
                                </thead>
                                <tbody id="bascula">
                                    <tr>
                                        <td><select name="tipoEquipo_id[]" id="tipoEquipo_id" class="tipoEquipo_id">
                                            <option value="0" selected="true" disabled="true" class="form-control">Seleccione</option>
                                            @foreach($tipos_equipos as $tipo_equipo)
                                                <option value="{{$tipo_equipo->id}}">{{$tipo_equipo->nombre}}</option>
                                            @endforeach
                                        </select></td>
                                        <td><input type="number" class="form-control input" id="cantidad" name="cantidad[]" style="width: 75px; text-align: center;"></td>
                                        <td><select name="marca_id[]" id="marca_id" class="marca_id">
                                            <option value="0" selected="true" disabled="true" class="form-control">Seleccione</option>
                                            @foreach($marcas as $marca)
                                                <option value="{{$marca->id}}">{{$marca->nombre}}</option>
                                            @endforeach
                                        </select></td>
                                        <td><select id="modelo_id" name="modelo_id[]">
                                            <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                            @foreach($modelos as $modelo)
                                                <option value="{{$modelo->id}}">{{$modelo->nombre}}</option>
                                            @endforeach
                                        </select></td>
                                        <td><select id="tipo_id" name="tipo_id[]">
                                            <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                            @foreach($tipos as $tipo)
                                                <option value="{{$tipo->id}}">{{$tipo->nombre}}</option>
                                            @endforeach
                                        </select></td>
                                        <td><input type="number" class="form-control input" id="puntos" name="puntos[]" style="width: 170px; text-align: center;"></td>
                                        <td><input type="text" class="form-control input" id="pesaje_mop" name="pesaje_mop[]" style="width: 75px; text-align: center;"></td>
                                        <td><input type="number" class="form-control input" id="capacidad" name="capacidad[]" style="width: 80px; text-align: center;"></td>
                                        <td><select id="unidadc_id" name="unidadc_id[]">
                                            <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                            @foreach($unidadesc as $unidad)
                                                <option value="{{$unidad->id}}">{{$unidad->nombre}}</option>
                                            @endforeach
                                            </select></td>
                                        <td><input type="number" class="form-control input graduacion" id="graduacion" name="graduacion[]" style="width: 85px; text-align:center;"></td>
                                        <td><select id="unidadg_id" name="unidadg_id[]">
                                            <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                            @foreach($unidadesg as $unidad2)
                                                <option value="{{$unidad2->id}}">{{$unidad2->nombre}}</option>
                                            @endforeach
                                            </select></td>
                                        <td><select id="condicion_id" name="condicion_id[]">
                                            <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                            @foreach($condiciones as $condicion)
                                                <option value="{{$condicion->id}}">{{$condicion->nombre}}</option>
                                            @endforeach
                                            </select></td>
                                        <td><input type="date" class="form-control input fu_mantencion" id="fu_mantencion" name="fu_mantencion[]"></td>
                                        <td><input type="date" class="form-control input fu_calibracion" id="fu_calibracion" name="fu_calibracion[]"></td>
                                        <td><input type="date" class="form-control input f_tentativa" id="f_tentativa" name="f_tentativa[]"></td>
                                        <td><button type="button" class="form-control input btn btn-success" id="agregar" style="margin-left:20px; width: 75px;">Agregar</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br><br>
                    </div>
                            </div>
                        </div>
                        <div class="form-group">
<div class="panel panel-default" id="content2" style="display: none; overflow: auto;">
                    <div class="panel-body">
                        <div class="col-lg-1 col-sm-1 col-md-1 col-xs-1">
                            <table>
                                <thead>
                                    <tr>
                                        <th style="text-align: center;"><label>Tipo Equipo</label></th>
                                        <th style="text-align: center;"><label>Cantidad</label></th>
                                        <th style="text-align: center;">Marca</th>
                                        <th style="text-align: center;">Modelo</th>
                                        <th style="text-align: center;">Tipo</th>
                                        <th style="text-align: center;">Puntos</th>
                                        <th style="text-align: center;">Cap.</th>
                                        <th style="text-align: center;">Unidad Cap.</th>
                                        <th style="text-align: center;">Grad.</th>
                                        <th style="text-align: center;">Unidad Grad.</th>
                                        <th style="text-align: center;">Condición</th>
                                        <th style="text-align: center;">Fecha Última Mantención</th>
                                        <th style="text-align: center;">Fecha Última Cal.</th>
                                        <th style="text-align: center;">Fecha Tentativa</th>
                                    </tr>
                                </thead>
                                <tbody id="balanza">
                                    <tr>
                                        <td><select name="tipoEquipo2_id[]" id="tipoEquipo2_id" class="tipoEquipo2_id">
                                            <option value="0" selected="true" disabled="true" class="form-control">Seleccione</option>
                                            @foreach($tipos_equipos2 as $tipo_equipo2)
                                                <option value="{{$tipo_equipo2->id}}">{{$tipo_equipo2->nombre}}</option>
                                            @endforeach
                                        </select></td>
                                        <td><input type="number" class="form-control input" id="cantidad2" name="cantidad2[]" style="width: 75px; text-align: center;"></td>
                                        <td><select name="marca2_id[]" id="marca2_id" class="marca2_id">
                                            <option value="0" selected="true" disabled="true" class="form-control">Seleccione</option>
                                            @foreach($marcas2 as $marca2)
                                                <option value="{{$marca2->id}}">{{$marca2->nombre}}</option>
                                            @endforeach
                                        </select></td>
                                        <td><select id="modelo2_id" name="modelo2_id[]">
                                            <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                            @foreach($modelos2 as $modelo2)
                                                <option value="{{$modelo2->id}}">{{$modelo2->nombre}}</option>
                                            @endforeach
                                        </select></td>
                                        <td><select id="tipo2_id" name="tipo2_id[]">
                                            <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                            @foreach($tipos2 as $tipo2)
                                                <option value="{{$tipo2->id}}">{{$tipo2->nombre}}</option>
                                            @endforeach
                                        </select></td>
                                        <td><input type="number" class="form-control input" id="puntos2" name="puntos2[]" style="width: 170px; text-align: center;"></td>
                                        <td><input type="number" class="form-control input" id="capacidad2" name="capacidad2[]" style="width: 80px; text-align: center;"></td>
                                        <td><select id="unidadc2_id" name="unidadc2_id[]">
                                            <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                            @foreach($unidadesc2 as $unidad3)
                                                <option value="{{$unidad3->id}}">{{$unidad3->nombre}}</option>
                                            @endforeach
                                            </select></td>
                                        <td><input type="number" class="form-control input graduacion" id="graduacion2" name="graduacion2[]" style="width: 85px; text-align:center;"></td>
                                        <td><select id="unidadg2_id" name="unidadg2_id[]">
                                            <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                            @foreach($unidadesg2 as $unidad4)
                                                <option value="{{$unidad4->id}}">{{$unidad4->nombre}}</option>
                                            @endforeach
                                            </select></td>
                                        <td><select id="condicion2_id" name="condicion2_id[]">
                                            <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                            @foreach($condiciones2 as $condicion2)
                                                <option value="{{$condicion2->id}}">{{$condicion2->nombre}}</option>
                                            @endforeach
                                            </select></td>
                                        <td><input type="date" class="form-control input fu_mantencion2" id="fu_mantencion2" name="fu_mantencion2[]"></td>
                                        <td><input type="date" class="form-control input fu_calibracion2" id="fu_calibracion2" name="fu_calibracion2[]"></td>
                                        <td><input type="date" class="form-control input f_tentativa2" id="f_tentativa2" name="f_tentativa2[]"></td>
                                        <td><button type="button" class="form-control input .btn btn-success btn-flat" id="agregar2" style="margin-left:20px; width: 75px;">Agregar</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br><br>
                    </div>
                </div>
                       </div>
<div class="form-group">
<div class="panel panel-default" id="content3" style="display: none; overflow: auto;">
                    <div class="panel-body">
                        <div class="col-lg-1 col-sm-1 col-md-1 col-xs-1">
                            <table>
                                <thead>
                                    <tr>
                                        <th style="text-align: center;"><label>Tipo Equipo</label></th>
                                        <th style="text-align: center;"><label>Cantidad</label></th>
                                        <th style="text-align: center;">Marca</th>
                                        <th style="text-align: center;">Modelo</th>
                                        <th style="text-align: center;">Material</th>
                                        <th style="text-align: center;">Clase(OIML)</th>
                                        <th style="text-align: center;">Condición</th>
                                        <th style="text-align: center;">Requiere Ajuste</th>
                                        <th style="text-align: center;">Requiere Mant.</th>
                                        <th style="text-align: center;">Fecha Tentativa</th>
                                    </tr>
                                </thead>
                                <tbody id="masa">
                                    <tr>
                                        <td><select name="tipoEquipo3_id[]" id="tipoEquipo3_id" class="tipoEquipo3_id">
                                            <option value="0" selected="true" disabled="true" class="form-control">Seleccione</option>
                                            @foreach($tipos_equipos3 as $tipo_equipo3)
                                                <option value="{{$tipo_equipo3->id}}">{{$tipo_equipo3->nombre}}</option>
                                            @endforeach
                                        </select></td>
                                        <td><input type="number" class="form-control input" id="cantidad3" name="cantidad3[]" style="width: 75px; text-align: center;"></td>
                                        <td><select name="marca3_id[]" id="marca3_id" class="marca3_id">
                                            <option value="0" selected="true" disabled="true" class="form-control">Seleccione</option>
                                            @foreach($marcas3 as $marca3)
                                                <option value="{{$marca3->id}}">{{$marca3->nombre}}</option>
                                            @endforeach
                                        </select></td>
                                        <td><select id="modelo3_id" name="modelo3_id[]">
                                            <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                            @foreach($modelos3 as $modelo3)
                                                <option value="{{$modelo3->id}}">{{$modelo3->nombre}}</option>
                                            @endforeach
                                        </select></td>
                                        <td><select id="material_id" name="material_id[]">
                                            <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                            @foreach($materiales as $material)
                                                <option value="{{$material->id}}">{{$material->nombre}}</option>
                                            @endforeach
                                        </select></td>
                                        <td><input type="text" class="form-control input" id="clase_oiml" name="clase_oiml[]" style="width: 170px; text-align: center;"></td>
                                        <td><select id="condicion3_id" name="condicion3_id[]">
                                            <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                            @foreach($condiciones3 as $condicion3)
                                                <option value="{{$condicion3->id}}">{{$condicion3->nombre}}</option>
                                            @endforeach
                                            </select></td>
                                        <td><input type="text" class="form-control input" id="r_ajuste" name="r_ajuste[]" style="width: 80px; text-align: center"></td>
                                        <td><input type="text" class="form-control input" id="r_mantencion" name="r_mantencion[]" style="width:80px; text-align: center;"></td>
                                        <td><input type="date" class="form-control input f_tentativa3" id="f_tentativa3" name="f_tentativa3[]"></td>
                                        <td><button type="button" class="form-control input .btn btn-success btn-flat" id="agregar3" style="margin-left:20px; width: 75px;">Agregar</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
            <div class="form-group">
<div class="panel panel-default" id="content4" style="display: none; overflow: auto;">
                    <div class="panel-body">
                        <div class="col-lg-1 col-sm-1 col-md-1 col-xs-1">
                            <table>
                                <thead>
                                    <tr>
                                        <th style="text-align: center;"><label>Tipo Equipo</label></th>
                                        <th style="text-align: center;"><label>Cantidad</label></th>
                                        <th style="text-align: center;">Marca</th>
                                        <th style="text-align: center;">Modelo</th>
                                        <th style="text-align: center;">Cap.</th>
                                        <th style="text-align: center;">Unidad Cap.</th>
                                        <th style="text-align: center;">Rango Uso</th>
                                        <th style="text-align: center;">Condición</th>
                                        <th style="text-align: center;">Fecha Última Mantención</th>
                                        <th style="text-align: center;">Fecha Última Cal.</th>
                                        <th style="text-align: center;">Fecha Tentativa</th>
                                    </tr>
                                </thead>
                                <tbody id="pesometro">
                                    <tr>
                                        <td><select name="tipoEquipo4_id[]" id="tipoEquipo4_id" class="tipoEquipo4_id">
                                            <option value="0" selected="true" disabled="true" class="form-control">Seleccione</option>
                                            @foreach($tipos_equipos4 as $tipo_equipo4)
                                                <option value="{{$tipo_equipo4->id}}">{{$tipo_equipo4->nombre}}</option>
                                            @endforeach
                                        </select></td>
                                        <td><input type="number" class="form-control input" id="cantidad4" name="cantidad4[]" style="width: 75px; text-align: center;"></td>
                                        <td><select name="marca4_id[]" id="marca4_id" class="marca4_id">
                                            <option value="0" selected="true" disabled="true" class="form-control">Seleccione</option>
                                            @foreach($marcas4 as $marca4)
                                                <option value="{{$marca4->id}}">{{$marca4->nombre}}</option>
                                            @endforeach
                                        </select></td>
                                        <td><select id="modelo4_id" name="modelo4_id[]">
                                            <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                            @foreach($modelos4 as $modelo4)
                                                <option value="{{$modelo4->id}}">{{$modelo4->nombre}}</option>
                                            @endforeach
                                        </select></td>
                                        <td><input type="number" class="form-control input" id="capacidad3" name="capacidad3[]" style="width: 80px; text-align: center;"></td>
                                        <td><select id="unidadc3_id" name="unidadc3_id[]">
                                            <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                            @foreach($unidadesc3 as $unidad3)
                                                <option value="{{$unidad3->id}}">{{$unidad3->nombre}}</option>
                                            @endforeach
                                            </select></td>
                                        <td><input type="text" class="form-control input" id="rango_uso" name="rango_uso" style="width: 80px; text-align: center;"></td>
                                        <td><select id="condicion4_id" name="condicion4_id[]">
                                            <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                            @foreach($condiciones4 as $condicion4)
                                                <option value="{{$condicion4->id}}">{{$condicion4->nombre}}</option>
                                            @endforeach
                                            </select></td>
                                        <td><input type="date" class="form-control input fu_mantencion3" id="fu_mantencion3" name="fu_mantencion3[]"></td>
                                        <td><input type="date" class="form-control input fu_calibracion3" id="fu_calibracion3" name="fu_calibracion3[]"></td>
                                        <td><input type="date" class="form-control input f_tentativa4" id="f_tentativa4" name="f_tentativa4[]"></td>
                                        <td><button type="button" class="form-control input .btn btn-success btn-flat" id="agregar4" style="margin-left:20px; width: 75px;">Agregar</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
                        <div class="form-group">
                             <label for="observaciones">Observaciones</label>
                             <p class="text-black">MENCIONAR SI CLIENTE PUEDE  MOVILIZAR MASAS DE 500KG PARA CASOS QUE NO ES POSIBLE ENTRAR CON CAMION</p>
                             <textarea class="form-control observaciones" id="observaciones" name="observaciones" rows="3" cols="40"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer">
              <input name="_token" value="{{ csrf_token() }}" type="hidden">
                                  <button type="button" class="btn btn-danger col-md-offset-5"><a href="{!! URL::to('/f37') !!}" style="color: #ffffff">Atrás</a></button>
                                  <button class="btn btn-primary" type="submit">Registrar</button>
            </div>
         </div>
    {!!Form::close() !!}

@endsection
@section('scripts')
    <!-- abrir y cerrar checkbox -->
    {!!Html::script('js/open-close.js')!!}

    <script type="text/javascript">
        $(document).ready(function(){
            var i = 1;
            $("#agregar").click(function(){
                i++;
                $("#bascula").append('<tr id="fila'+i+'">'+
                    '<td><select name="tipoEquipo_id[]" id="tipoEquipo_id" class="tipoEquipo_id">'+
                        '<option value="0" selected="true" disabled="true" class="form-control">Seleccione</option>'+
                        '@foreach($tipos_equipos as $tipo_equipo)'+
                            '<option value="{{$tipo_equipo->id}}">{{$tipo_equipo->nombre}}</option>'+
                        '@endforeach'+
                        '</select></td>'+
                    '<td><input type="number" class="form-control input" id="cantidad" name="cantidad[]" style="width: 75px; text-align: center;"></td>'+
                    '<td><select name="marca_id[]" id="marca_id" class="marca_id">'+
                        '<option value="0" selected="true" disabled="true" class="form-control">Seleccione</option>'+
                        '@foreach($marcas as $marca)'+
                            '<option value="{{$marca->id}}">{{$marca->nombre}}</option>'+
                        '@endforeach'+
                    '</select></td>'+
                    '<td><select id="modelo_id" name="modelo_id[]">'+
                        '<option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>'+
                        '@foreach($modelos as $modelo)'+
                            '<option value="{{$modelo->id}}">{{$modelo->nombre}}</option>'+
                        '@endforeach'+
                    '</select></td>'+
                    '<td><select id="tipo_id" name="tipo_id[]">'+
                        '<option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>'+
                        '@foreach($tipos as $tipo)'+
                            '<option value="{{$tipo->id}}">{{$tipo->nombre}}</option>'+
                        '@endforeach'+
                    '</select></td>'+
                    '<td><input type="number" class="form-control input" id="puntos" name="puntos[]" style="width: 170px; text-align: center;"></td>'+
                    '<td><input type="text" class="form-control input" id="pesaje_mop" name="pesaje_mop[]" style="width: 75px; text-align: center;"></td>'+
                    '<td><input type="number" class="form-control input" id="capacidad" name="capacidad[]" style="width: 80px; text-align: center;"></td>'+
                    '<td><select id="unidadc_id" name="unidadc_id[]">'+
                        '<option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>'+
                        '@foreach($unidadesc as $unidad)'+
                            '<option value="{{$unidad->id}}">{{$unidad->nombre}}</option>'+
                        '@endforeach'+
                    '</select></td>'+
                    '<td><input type="number" class="form-control input graduacion" id="graduacion" name="graduacion[]" style="width: 85px; text-align:center;"></td>'+
                    '<td><select id="unidadg_id" name="unidadg_id[]">'+
                        '<option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>'+
                        '@foreach($unidadesg as $unidad2)'+
                            '<option value="{{$unidad2->id}}">{{$unidad2->nombre}}</option>'+
                        '@endforeach'+
                    '</select></td>'+
                    '<td><select id="condicion_id" name="condicion_id[]">'+
                        '<option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>'+
                        '@foreach($condiciones as $condicion)'+
                            '<option value="{{$condicion->id}}">{{$condicion->nombre}}</option>'+
                        '@endforeach'+
                    '</select></td>'+
                    '<td><input type="date" class="form-control input fu_mantencion" id="fu_mantencion" name="fu_mantencion[]"></td>'+
                    '<td><input type="date" class="form-control input fu_calibracion" id="fu_calibracion" name="fu_calibracion[]"></td>'+
                    '<td><input type="date" class="form-control input f_tentativa" id="f_tentativa" name="f_tentativa[]"></td>'+
                    '<td><button type="button" name="remove" class=".btn btn-danger btn-flat btn_remove" id="'+i+'">X</button></td></tr>'
                );
            });

            $(document).on('click','.btn_remove',function(){
                var button_id=$(this).attr("id");
                $('#fila'+button_id+'').remove();
            });
        });

        $(document).ready(function(){
            var i = 1;
            $("#agregar2").click(function(){
                i++;
                $("#balanza").append('<tr id="fila'+i+'">'+
                    '<td><select name="tipoEquipo2_id[]" id="tipoEquipo2_id" class="tipoEquipo2_id">'+
                        '<option value="0" selected="true" disabled="true" class="form-control">Seleccione</option>'+
                        '@foreach($tipos_equipos2 as $tipo_equipo2)'+
                            '<option value="{{$tipo_equipo2->id}}">{{$tipo_equipo2->nombre}}</option>'+
                        '@endforeach'+
                        '</select></td>'+
                    '<td><input type="number" class="form-control input" id="cantidad2" name="cantidad2[]" style="width: 75px; text-align: center;"></td>'+
                    '<td><select name="marca2_id[]" id="marca2_id" class="marca2_id">'+
                        '<option value="0" selected="true" disabled="true" class="form-control">Seleccione</option>'+
                        '@foreach($marcas2 as $marca2)'+
                            '<option value="{{$marca2->id}}">{{$marca2->nombre}}</option>'+
                        '@endforeach'+
                    '</select></td>'+
                    '<td><select id="modelo2_id" name="modelo2_id[]">'+
                        '<option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>'+
                        '@foreach($modelos2 as $modelo2)'+
                            '<option value="{{$modelo2->id}}">{{$modelo2->nombre}}</option>'+
                        '@endforeach'+
                    '</select></td>'+
                    '<td><select id="tipo2_id" name="tipo2_id[]">'+
                        '<option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>'+
                        '@foreach($tipos2 as $tipo2)'+
                            '<option value="{{$tipo2->id}}">{{$tipo2->nombre}}</option>'+
                        '@endforeach'+
                    '</select></td>'+
                    '<td><input type="number" class="form-control input" id="puntos2" name="puntos2[]" style="width: 170px; text-align: center;"></td>'+
                    '<td><input type="number" class="form-control input" id="capacidad2" name="capacidad2[]" style="width: 80px; text-align: center;"></td>'+
                    '<td><select id="unidadc2_id" name="unidadc2_id[]">'+
                        '<option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>'+
                        '@foreach($unidadesc2 as $unidad3)'+
                            '<option value="{{$unidad3->id}}">{{$unidad3->nombre}}</option>'+
                        '@endforeach'+
                    '</select></td>'+
                    '<td><input type="number" class="form-control input graduacion" id="graduacion2" name="graduacion2[]" style="width: 85px; text-align:center;"></td>'+
                    '<td><select id="unidadg2_id" name="unidadg2_id[]">'+
                        '<option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>'+
                        '@foreach($unidadesg2 as $unidad4)'+
                            '<option value="{{$unidad4->id}}">{{$unidad4->nombre}}</option>'+
                        '@endforeach'+
                    '</select></td>'+
                    '<td><select id="condicion2_id" name="condicion2_id[]">'+
                        '<option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>'+
                        '@foreach($condiciones2 as $condicion2)'+
                            '<option value="{{$condicion2->id}}">{{$condicion2->nombre}}</option>'+
                        '@endforeach'+
                    '</select></td>'+
                    '<td><input type="date" class="form-control input fu_mantencion" id="fu_mantencion2" name="fu_mantencion2[]"></td>'+
                    '<td><input type="date" class="form-control input fu_calibracion" id="fu_calibracion2" name="fu_calibracion2[]"></td>'+
                    '<td><input type="date" class="form-control input f_tentativa" id="f_tentativa2" name="f_tentativa2[]"></td>'+
                    '<td><button type="button" name="remove" class=".btn btn-danger btn-flat btn_remove2" id="'+i+'">X</button></td></tr>'
                );
            });

            $(document).on('click','.btn_remove2',function(){
                var button_id=$(this).attr("id");
                $('#fila'+button_id+'').remove();
            });
        });

        $(document).ready(function(){
            var i = 1;
            $("#agregar3").click(function(){
                i++;
                $("#masa").append('<tr id="fila'+i+'">'+
                    '<td><select name="tipoEquipo3_id[]" id="tipoEquipo3_id" class="tipoEquipo3_id">'+
                        '<option value="0" selected="true" disabled="true" class="form-control">Seleccione</option>'+
                        '@foreach($tipos_equipos3 as $tipo_equipo3)'+
                            '<option value="{{$tipo_equipo3->id}}">{{$tipo_equipo3->nombre}}</option>'+
                        '@endforeach'+
                    '</select></td>'+
                    '<td><input type="number" class="form-control input" id="cantidad3" name="cantidad3[]" style="width: 75px; text-align: center;"></td>'+
                    '<td><select name="marca3_id[]" id="marca3_id" class="marca3_id">'+
                        '<option value="0" selected="true" disabled="true" class="form-control">Seleccione</option>'+
                        '@foreach($marcas3 as $marca3)'+
                            '<option value="{{$marca3->id}}">{{$marca3->nombre}}</option>'+
                        '@endforeach'+
                    '</select></td>'+
                    '<td><select id="modelo3_id" name="modelo3_id[]">'+
                        '<option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>'+
                        '@foreach($modelos3 as $modelo3)'+
                            '<option value="{{$modelo3->id}}">{{$modelo3->nombre}}</option>'+
                        '@endforeach'+
                    '</select></td>'+
                    '<td><select id="material_id" name="material_id[]">'+
                        '<option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>'+
                        '@foreach($materiales as $material)'+
                            '<option value="{{$material->id}}">{{$material->nombre}}</option>'+
                        '@endforeach'+
                    '</select></td>'+
                    '<td><input type="text" class="form-control input" id="clase_oiml" name="clase_oiml[]" style="width: 170px; text-align: center;"></td>'+
                    '<td><select id="condicion3_id" name="condicion3_id[]">'+
                        '<option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>'+
                        '@foreach($condiciones3 as $condicion3)'+
                            '<option value="{{$condicion3->id}}">{{$condicion3->nombre}}</option>'+
                        '@endforeach'+
                    '</select></td>'+
                    '<td><input type="text" class="form-control input" id="r_ajuste" name="r_ajuste[]" style="width: 80px; text-align: center"></td>'+
                    '<td><input type="text" class="form-control input" id="r_mantencion" name="r_mantencion[]" style="width:80px; text-align: center;"></td>'+
                    '<td><input type="date" class="form-control input f_tentativa3" id="f_tentativa3" name="f_tentativa3[]"></td>'+
                    '<td><button type="button" name="remove" class=".btn btn-danger btn-flat btn_remove3" id="'+i+'">X</button></td></tr>'
                        );
                    });

                    $(document).on('click','.btn_remove3',function(){
                        var button_id=$(this).attr("id");
                        $('#fila'+button_id+'').remove();
                    });
                });

        $(document).ready(function(){
            var i = 1;
            $("#agregar4").click(function(){
                i++;
                $("#pesometro").append('<tr id="fila'+i+'">'+
                    '<td><select name="tipoEquipo4_id[]" id="tipoEquipo4_id" class="tipoEquipo4_id">'+
                        '<option value="0" selected="true" disabled="true" class="form-control">Seleccione</option>'+
                        '@foreach($tipos_equipos4 as $tipo_equipo4)'+
                            '<option value="{{$tipo_equipo4->id}}">{{$tipo_equipo4->nombre}}</option>'+
                        '@endforeach'+
                    '</select></td>'+
                    '<td><input type="number" class="form-control input" id="cantidad4" name="cantidad4[]" style="width: 75px; text-align: center;"></td>'+
                    '<td><select name="marca4_id[]" id="marca4_id" class="marca4_id">'+
                        '<option value="0" selected="true" disabled="true" class="form-control">Seleccione</option>'+
                        '@foreach($marcas4 as $marca4)'+
                            '<option value="{{$marca4->id}}">{{$marca4->nombre}}</option>'+
                        '@endforeach'+
                    '</select></td>'+
                    '<td><select id="modelo4_id" name="modelo4_id[]">'+
                        '<option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>'+
                        '@foreach($modelos4 as $modelo4)'+
                            '<option value="{{$modelo4->id}}">{{$modelo4->nombre}}</option>'+
                        '@endforeach'+
                    '</select></td>'+
                    '<td><input type="number" class="form-control input" id="capacidad3" name="capacidad3[]" style="width: 80px; text-align: center;"></td>'+
                    '<td><select id="unidadc3_id" name="unidadc3_id[]">'+
                        '<option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>'+
                        '@foreach($unidadesc3 as $unidad3)'+
                            '<option value="{{$unidad3->id}}">{{$unidad3->nombre}}</option>'+
                        '@endforeach'+
                    '</select></td>'+
                    '<td><input type="text" class="form-control input" id="rango_uso" name="rango_uso" style="width: 80px; text-align: center;"></td>'+
                    '<td><select id="condicion4_id" name="condicion4_id[]">'+
                        '<option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>'+
                        '@foreach($condiciones4 as $condicion4)'+
                            '<option value="{{$condicion4->id}}">{{$condicion4->nombre}}</option>'+
                        '@endforeach'+
                    '</select></td>'+
                    '<td><input type="date" class="form-control input fu_mantencion3" id="fu_mantencion3" name="fu_mantencion3[]"></td>'+
                    '<td><input type="date" class="form-control input fu_calibracion3" id="fu_calibracion3" name="fu_calibracion3[]"></td>'+
                    '<td><input type="date" class="form-control input f_tentativa4" id="f_tentativa4" name="f_tentativa4[]"></td>'+
                    '<td><button type="button" name="remove" class=".btn btn-danger btn-flat btn_remove4" id="'+i+'">X</button></td></tr>'
                );
            });

            $(document).on('click','.btn_remove4',function(){
                var button_id=$(this).attr("id");
                $('#fila'+button_id+'').remove();
            });
        });

    </script>

@endsection
