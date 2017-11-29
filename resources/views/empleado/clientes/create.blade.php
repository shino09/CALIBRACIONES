@extends('empleado.home2')
    @section('contenido')
    @if(Session::has('mensaje'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    {{Session::get('mensaje')}}
                </div>
            @endif
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="box box-success">
                    <div class="box-header with-border">
                        <h3 class="box-title">Ingresar nuevo cliente</h3>
                    </div>
                    {!!Form::open(['route' => 'cliente.store','method' => 'POST'])!!}
                        <div class="box-body">
                            <div class="form-group">
                                {!!Form::label('rut_cliente','Rut',['class' =>'col-md-4 control-label'])!!}
                                {!!Form::text('rut_cliente',null,['class' => 'form-control input', 'style' => 'width:300px;', 'onKeyPress' => 'return SoloNumeros(event);'])!!}
                                <p style="color: red; margin-left: 40px;">Debe ingresar el rut sin puntos, con guión y dígito verificador</p>
                                @if ($errors->has('rut_cliente'))
                                    <span class="help-block">
                                            <p style="color: red; text-align: center">{{ $errors->first('rut_cliente') }}</p>
                                    </span>
                                @endif
                            </div>
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
                                {!!Form::label('ubicacion','Ciudad',['class' =>'col-md-4 control-label'])!!}
                                {!!Form::text('ubicacion',null,['class' => 'form-control input', 'style' => 'width:300px;'])!!}
                                @if ($errors->has('ubicacion'))
                                    <span class="help-block">
                                        <p style="color: red; text-align: center">{{ $errors->first('ubicacion') }}</p>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                {!!Form::label('planta','Dirección',['class' =>'col-md-4 control-label'])!!}
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
                        {!!Form::submit('Registrar',['class' => 'btn btn-primary col-md-offset-1'])!!}
                    {!!Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    @endsection














