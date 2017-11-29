@extends('...administrador.home')
    @section('contenido')
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Ingresar nueva marca de equipo de pesaje</h3>
                    </div>
                    {!!Form::open(['route' => 'marca.store','method' => 'POST'])!!}
                        <div class="box-body">
                            <div class="form-group">
                                {!!Form::label('nombre','Marca',['class' => 'col-md-4 control-label'])!!}
                                {!!Form::text('nombre',null,['class' => 'form-control input', 'style' => 'width: 300px;'])!!}
                                @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <p style="color: red; text-align: center">{{ $errors->first('nombre') }}</p>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                {!!Form::label('tipoEquipo_id','Tipo Equipo',['class' => 'col-md-4 control-label'])!!}
                                <th><select id="tipoEquipo_id" name="tipoEquipo_id" style="width: 300px;">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                        @foreach($tipos_equipos as $key =>$tipo_equipo)
                                            <option value="{!!$key!!}">{!!$tipo_equipo!!}</option>
                                        @endforeach
                                </select></th>
                                @if ($errors->has('tipoEquipo_id'))
                                    <span class="help-block">
                                        <p style="color: red; text-align: center">{{ $errors->first('tipoEquipo_id') }}</p>
                                    </span>
                                @endif
                            </div>
                        </div>
                    <div class="box-footer">
                        <button type="button" class="btn btn-danger col-md-offset-4"><a href="{!! URL::to('/marca') !!}" style="color: #ffffff">Atrás</a></button>
                        {!!Form::submit('Registrar',['class' => 'btn btn-primary col-md-offset-1'])!!}
                    {!!Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    @endsection









