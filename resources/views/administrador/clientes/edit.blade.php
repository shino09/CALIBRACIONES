@extends('...administrador.home')
    @section('contenido')
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Actualizar información cliente</h3>
                    </div>
                    {!!Form::model($cliente,['route' => ['cliente.update',$cliente -> id],'method' => 'PUT'])!!}
                        <div class="box-body">
                            <div class="form-group">
                                {!!Form::label('nombre','Nombre',['class' =>'col-md-4 control-label'])!!}
                                {!!Form::text('nombre',null,['class' => 'form-control input', 'style' => 'width:300px;'])!!}
                                @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <p style="color: red; text-align: center">{{ $errors->first('nombre') }}</p>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                {!!Form::label('ubicacion','Ubicación',['class' =>'col-md-4 control-label'])!!}
                                {!!Form::text('ubicacion',null,['class' => 'form-control input', 'style' => 'width:300px;'])!!}
                                @if ($errors->has('ubicacion'))
                                    <span class="help-block">
                                        <p style="color: red; text-align: center">{{ $errors->first('ubicacion') }}</p>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                {!!Form::label('planta','Planta',['class' =>'col-md-4 control-label'])!!}
                                {!!Form::text('planta',null,['class' => 'form-control input', 'style' => 'width:300px;'])!!}
                                @if ($errors->has('planta'))
                                    <span class="help-block">
                                        <p style="color: red; text-align: center">{{ $errors->first('planta') }}</p>
                                    </span>
                                @endif
                            </div>
                        </div>
                    <div class="box-footer">
                        <button type="button" class="btn btn-danger col-md-offset-4"><a href="{!! URL::to('/cliente') !!}" style="color: #ffffff">Atrás</a></button>
                        {!!Form::submit('Actualizar',['class' => 'btn btn-primary col-md-offset-1'])!!}
                    {!!Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    @endsection









