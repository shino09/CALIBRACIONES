@extends('...administrador.home')
    @section('contenido')
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Actualizar información tipo de equipo de pesaje</h3>
                    </div>
                    {!!Form::model($tipo_equipo,['route' => ['tipo_equipo.update',$tipo_equipo -> id],'method' => 'PUT'])!!}
                        <div class="box-body">
                            <div class="form-group">
                                {!!Form::label('nombre','Tipo de equipo',['class' => 'col-md-4 control-label'])!!}
                                {!!Form::text('nombre',null,['class' => 'form-control input', 'style' => 'width:300px;'])!!}
                                @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <p style="color: red; text-align: center">{{ $errors->first('nombre') }}</p>
                                    </span>
                                @endif
                            </div>
                        </div>
                    <div class="box-footer">
                        <button type="button" class="btn btn-danger col-md-offset-4"><a href="{!! URL::to('/tipo_equipo') !!}" style="color: #ffffff">Atrás</a></button>
                        {!!Form::submit('Actualizar',['class' => 'btn btn-primary col-md-offset-1'])!!}
                    {!!Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    @endsection









