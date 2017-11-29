@extends('...administrador.home')
    @section('contenido')
        {!!Form::open(['url' => '/f37','method' => 'POST'])!!}
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Detalles solicitud de cotización</h3>
                        </div>
                        <div class="box-body">
                            <div class="form-group">
                                <label for="id" class="col-md-2 control-label">N°:</label>
                                <input type="text" class="form-control input" id="numero" name="numero" value="<?= $f37->numero; ?>"disabled style="width: 300px;">
                            </div>
                            <div class="form-group">
                                <label for="fecha_solicitud" class="col-md-2 control-label">Fecha solicitud:</label>
                                <input type="date" class="form-control input" id="fecha_solicitud" name="fecha_solicitud" value="<?= date('Y-m-d', strtotime($f37->fecha_solicitud)); ?>"  disabled style="width: 300px;">
                            </div>
                            <div class="form-group">
                                <label for="id_usuario" class="col-md-2 control-label">Vendedor:</label>
                                <input type="text" class="form-control input" name="id_vendedor" disabled style="width: 300px;" value="<?= Auth::user()->name ?> <?= Auth::user()->apellido_paterno?>" >
                            </div>
                            <div class="form-group">
                                <label for="cliente_id" class="col-md-2 control-label">Cliente</label>
                                <input type="text" class="form-control input" disabled value="<?= $f37->cliente->nombre; ?>" style="width: 300px;">
                            </div>
                            <div class="form-group">
                                <label for="comuna_servicio" class="col-xs-2 control-label">Comuna servicio</label>
                                <input type="text" class="form-control input" id="comuna_servicio" name="comuna_servicio" style="width: 300px;" disabled value="<?= $f37->comuna_servicio; ?>">
                            </div>
                            <div class="form-group">
                                <label for="lugar_servicio" class="col-xs-2 control-label">Lugar del servicio</label>
                                <input type="text" class="form-control input" id="lugar_servicio" name="lugar_servicio" style="width: 300px;" disabled value="<?= $f37->lugar_servicio; ?>">
                            </div>
                            <div class="form-group">
                                <p class="text-black" style="text-align: center;">LAS FECHAS QUE SE ENCUENTREN RESERVADAS DEBEN SER CONFIRMADAS 5 DIAS HABILES ANTES DEL SERVICIO, DE LO CONTRARIO SE ANULARÁ EL SERVICIO</p>
                            </div>
                            <div class="form-group">
                                <label>Tipo plan cliente seleccionado: </label>
                                @if ($f37->tipo_cliente != "")
                                    @foreach(explode(',', $f37->tipo_cliente) as $info)
                                        <option>{{$info}}</option>
                                    @endforeach
                                @endif
                            </div>
                            <div class="form-group">
                                <label>Seleccione tipo equipo: </label>
                                <input type="checkbox" value="1" name="check" id="check" onclick="javascript:showContent();"/>Báscula
                                <input type="checkbox" value="2" name="check2" id="check2" onclick="javascript:showContent2();"/>Balanza
                                <input type="checkbox" value="3" name="check3" id="check3" onclick="javascript:showContent3();"/>Masa
                                <input type="checkbox" value="4" name="check4" id="check4" onclick="javascript:showContent4();"/>Pesómetro
                            </div>
                            @if(count($bascula)>0)
                            <div class="form-group">
<div class="panel panel-default" id="content" style="display: none; overflow: auto;">
                    <div class="panel-body">
                        <div class="col-lg-1 col-sm-1 col-md-1 col-xs-1">
                <table>
                    <thead>
                        <tr id="miTablaPersonalizada">
                            <th style="text-align: center">Cantidad</th>
                            <th style="text-align: center">Tipo equipo</th>
                            <th style="text-align: center">Marca</th>
                            <th style="text-align: center">Modelo</th>
                            <th style="text-align: center">Tipo</th>
                            <th style="text-align: center">Puntos</th>
                            <th style="text-align: center">Pesaje MOP</th>
                            <th style="text-align: center">Capacidad</th>
                            <th style="text-align: center">Unidad Cap.</th>
                            <th style="text-align: center">Graduación</th>
                            <th style="text-align: center">Unidad Grad.</th>
                            <th style="text-align: center">Condición</th>
                            <th style="text-align: center">Fecha Última Mantención</th>
                            <th style="text-align: center">Fecha Última Cal.</th>
                            <th style="text-align: center">Fecha Tentativa</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        @foreach($bascula as $bas)
                            <tr>
                                <th><input type="text" class="form-control input" style="width: 75px; text-align: center;" disabled value="{{$bas->cantidad}}"></th>
                                <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{ $bas->ti_nombre }}"></th>
                                <th><input type="text" class="form-control input" style="width: 160px; text-align: center;" disabled value="{{ $bas->ma_nombre }}"></th>
                                <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{ $bas->mo_nombre }}"></th>
                                <th><input type="text" class="form-control input" style="width: 180px; text-align: center;" disabled value="{{ $bas->t_nombre }}"></th>
                                <th><input type="text" class="form-control input" style="width: 150px; text-align: center;" disabled value="<?php if ($bas->puntos != 0){echo $bas->puntos;} ?>"></th>
                                <th><input type="text" class="form-control input" style="width: 120px; text-align: center;" disabled value="{{ $bas->pesaje_mop }}"></th>
                                <th><input type="text" class="form-control input" style="width: 80px; text-align: center;" disabled value="<?php if ($bas->capacidad != 0){echo $bas->capacidad;} ?>"></th>
                                <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{ $bas->uni_nombre }}"></th>
                                <th><input type="text" class="form-control input" style="width: 85px; text-align: center;" disabled value="<?php if ($bas->graduacion != 0){echo $bas->graduacion;} ?>"></th>
                                <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{ $bas->unig_nombre }}"></th>
                                <th><input type="text" class="form-control input" style="width: 160px; text-align: center;" disabled value="{{ $bas->co_nombre }}"></th>
                                <th><input type="text" class="form-control input" style="width: 160px; text-align: center;" disabled value="<?php if ($bas->mantencion != "0000-00-00"){echo date('d-m-Y',strtotime($bas->mantencion));} ?>"></th>
                                <th><input type="text" class="form-control input" style="width: 120px; text-align: center;" disabled value="<?php if ($bas->calibracion != "0000-00-00"){echo date('d-m-Y',strtotime($bas->calibracion));} ?>"></th>
                                <th><input type="text" class="form-control input" style="width: 110px; text-align: center;" disabled value="<?php if ($bas->tentativa != "0000-00-00"){echo date('d-m-Y',strtotime($bas->tentativa));} ?>"></th>
                            </tr>
                        @endforeach

                    </tbody>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </tfoot>
                    </table>

                        </div>
                        <br><br>
                    </div>
                            </div>
                        </div>
                     @endif
                     @if(count($balanza)>0)
                        <div class="form-group">
<div class="panel panel-default" id="content2" style="display: none; overflow: auto;">
                    <div class="panel-body">
                        <div class="col-lg-1 col-sm-1 col-md-1 col-xs-1">
                <table>
                    <thead>
                        <tr id="miTablaPersonalizada">
                            <th>Cantidad</th>
                            <th>Tipo equipo</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Tipo</th>
                            <th>Puntos</th>
                            <th>Capacidad</th>
                            <th>Unidad Cap.</th>
                            <th>Graduación</th>
                            <th>Unidad Grad.</th>
                            <th>Condición</th>
                            <th>Fecha Última Mantención</th>
                            <th>Fecha Última Cal.</th>
                            <th>Fecha Tentativa</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        @foreach($balanza as $ba)
                            <tr>
                                <th><input type="text" class="form-control input" style="width: 75px; text-align: center;" disabled value="{{ $ba->cantidad }}"></th>
                                <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{ $ba->ti_nombre }}"></th>
                                <th><input type="text" class="form-control input" style="width: 160px; text-align: center;" disabled value="{{ $ba->ma_nombre }}"></th>
                                <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{ $ba->mo_nombre }}"></th>
                                <th><input type="text" class="form-control input" style="width: 180px; text-align: center;" disabled value="{{ $ba->t_nombre }}"></th>
                                <th><input type="text" class="form-control input" style="width: 150px; text-align: center;" disabled value="<?php if ($ba->puntos != 0){echo $ba->puntos;} ?>"></th>
                                <th><input type="text" class="form-control input" style="width: 80px; text-align: center;" disabled value="<?php if ($ba->capacidad != 0){echo $ba->capacidad;} ?>"></th>
                                <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{ $ba->uni_nombre }}"></th>
                                <th><input type="text" class="form-control input" style="width: 85px; text-align: center;" disabled value="<?php if ($ba->graduacion != 0){echo $ba->graduacion;} ?>"></th>
                                <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{ $ba->unig_nombre }}"></th>
                                <th><input type="text" class="form-control input" style="width: 160px; text-align: center;" disabled value="{{ $ba->co_nombre }}"></th>
                                <th><input type="text" class="form-control input" style="width: 160px; text-align: center;" disabled value="<?php if ($ba->mantencion != "0000-00-00"){echo date('d-m-Y',strtotime($ba->mantencion));} ?>"></th>
                                <th><input type="text" class="form-control input" style="width: 120px; text-align: center;" disabled value="<?php if ($ba->calibracion != "0000-00-00"){echo date('d-m-Y',strtotime($ba->calibracion));} ?>"></th>
                                <th><input type="text" class="form-control input" style="width: 110px; text-align: center;" disabled value="<?php if ($ba->tentativa != "0000-00-00"){echo date('d-m-Y',strtotime($ba->tentativa));} ?>"></th>
                            </tr>
                        @endforeach

                    </tbody>
                </table>

                        </div>
                        <br><br>
                    </div>
                </div>
                       </div>
                @endif
                @if(count($masa)>0)
<div class="form-group">
<div class="panel panel-default" id="content3" style="display: none; overflow: auto;">
                    <div class="panel-body">
                        <div class="col-lg-1 col-sm-1 col-md-1 col-xs-1">
                <table>
                    <thead>
                        <tr id="miTablaPersonalizada">
                            <th>Cantidad</th>
                            <th>Tipo equipo</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Material</th>
                            <th>Clase(OIML)</th>
                            <th>Condición</th>
                            <th>Requiere Ajuste</th>
                            <th>Requiere Mant.</th>
                            <th>Fecha Tentativa</th>
                        </tr>
                    </thead>
                    <tbody id="tbody3">
                        @foreach($masa as $mas)
                        <tr>
                            <th><input type="text" class="form-control input" style="width: 75px; text-align: center;" disabled value="<?php if ($mas->cantidad != 0){echo $mas->cantidad;} ?>"></th>
                            <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{$mas->ti_nombre}}"></th>
                            <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{$mas->ma_nombre}}"></th>
                            <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{$mas->mo_nombre}}"></th>
                            <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{$mas->mat_nombre}}"></th>
                            <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{$mas->clase}}"></th>
                            <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{$mas->co_nombre}}"></th>
                            <th><input type="text" class="form-control input" style="width: 110px; text-align: center;" disabled value="{{$mas->ajuste}}"></th>
                            <th><input type="text" class="form-control input" style="width: 110px; text-align: center;" disabled value="{{$mas->mantencion}}"></th>
                            <th><input type="text" class="form-control input" style="width: 110px; text-align: center;" disabled value="<?php if ($mas->tentativa != "0000-00-00"){echo date('d-m-Y',strtotime($mas->tentativa));} ?>"></th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
            @endif
            @if(count($pesometro)>0)
            <div class="form-group">
<div class="panel panel-default" id="content4" style="display: none; overflow: auto;">
                    <div class="panel-body">
                        <div class="col-lg-1 col-sm-1 col-md-1 col-xs-1">
                <table>
                    <thead>
                        <tr id="miTablaPersonalizada">
                            <th>Cantidad</th>
                            <th>Tipo equipo</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Cap.</th>
                            <th>Unidad Cap.</th>
                            <th>Rango uso</th>
                            <th>Condición</th>
                            <th>Fecha Última Mantención</th>
                            <th>Fecha Última Cal.</th>
                            <th>Fecha Tentativa</th>
                        </tr>
                    </thead>
                    <tbody id="tbody">
                        @foreach($pesometro as $pes)
                        <tr>
                            <th><input type="text" class="form-control input" style="width: 75px; text-align: center;" disabled value="<?php if ($pes->cantidad != 0){echo $pes->cantidad;} ?>"></th>
                            <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{$pes->ti_nombre}}"></th>
                            <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{$pes->ma_nombre}}"></th>
                            <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{$pes->mo_nombre}}"></th>
                            <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{$pes->rango}}"></th>
                            <th><input type="text" class="form-control input" style="width: 80px; text-align: center;" disabled value="<?php if ($pes->capacidad != 0){echo $pes->capacidad;} ?>"></th>
                            <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{$pes->uni_nombre}}"></th>
                            <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{$pes->co_nombre}}"></th>
                            <th><input type="text" class="form-control input" style="width: 160px; text-align: center;" disabled value="<?php if ($pes->mantencion != "0000-00-00"){echo date('d-m-Y',strtotime($pes->mantencion));} ?>"></th>
                            <th><input type="text" class="form-control input" style="width: 120px; text-align: center;" disabled value="<?php if ($pes->calibracion != "0000-00-00"){echo date('d-m-Y',strtotime($pes->calibracion));} ?>"></th>
                            <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{$pes->unitario}}"></th>
                            <th><input type="text" class="form-control input" style="width: 110px; text-align: center;" disabled value="<?php if ($pes->tentativa != "0000-00-00"){echo date('d-m-Y',strtotime($pes->tentativa));} ?>"></th>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                        </div>
                        <br><br>
                    </div>
                </div>
            </div>
            @endif
                        <div class="form-group">
<label for="observaciones">Observaciones</label>
                    <p class="text-red">MENCIONAR SI CLIENTE PUEDE  MOVILIZAR MASAS DE 500KG PARA CASOS QUE NO ES POSIBLE ENTRAR CON CAMION</p>
                    <textarea class="form-control observaciones" id="observaciones" name="observaciones" rows="3" cols="40" disabled><?= $f37->observaciones; ?></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-footer">
              <input name="_token" value="{{ csrf_token() }}" type="hidden">
              <button type="button" class="btn btn-danger col-md-offset-5"><a href="{!! URL::to('/f37') !!}" style="color: #ffffff">Atrás</a></button>

            </div>
         </div>
    {!!Form::close() !!}

@endsection
@section('scripts')
    <!-- abrir y cerrar checkbox -->
    {!!Html::script('js/open-close.js')!!}
@endsection
