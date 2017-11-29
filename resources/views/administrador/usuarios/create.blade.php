@extends('...administrador.home')
    @section('contenido')
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Ingresar nuevo usuario</h3>
                    </div>
                    {!!Form::open(['route' => 'usuario.store','method' => 'POST'])!!}
                        <div class="box-body">
                            <div class="form-group">
                                {!!Form::label('rut_usuario','Rut',['class' =>'col-md-4 control-label'])!!}
                                {!!Form::text('rut_usuario',null,['class' => 'form-control input', 'style' => 'width:300px;', 'onKeyPress' => 'return SoloNumeros(event);'])!!}
                                <p style="color: red; margin-left: 40px;">Debe ingresar el rut sin puntos, con guión y dígito verificador</p>
                                @if ($errors->has('rut_usuario'))
                                    <span class="help-block">
                                        <p style="color: red; text-align: center">{{ $errors->first('rut_usuario') }}</p>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                {!!Form::label('name','Nombres',['class' =>'col-md-4 control-label'])!!}
                                {!!Form::text('name',null,['class' => 'form-control input', 'style' => 'width:300px;'])!!}
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <p style="color: red; text-align: center">{{ $errors->first('name') }}</p>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                {!!Form::label('apellido_paterno','Apellido Paterno',['class' =>'col-md-4 control-label'])!!}
                                {!!Form::text('apellido_paterno',null,['class' => 'form-control input', 'style' => 'width:300px;'])!!}
                                @if ($errors->has('apellido_paterno'))
                                    <span class="help-block">
                                        <p style="color: red; text-align: center">{{ $errors->first('apellido_paterno') }}</p>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                {!!Form::label('apellido_materno','Apellido Materno',['class' =>'col-md-4 control-label'])!!}
                                {!!Form::text('apellido_materno',null,['class' => 'form-control input', 'style' => 'width:300px;'])!!}
                                @if ($errors->has('apellido_materno'))
                                    <span class="help-block">
                                        <p style="color: red; text-align: center">{{ $errors->first('apellido_materno') }}</p>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                {!!Form::label('email','Correo electrónico',['class' =>'col-md-4 control-label'])!!}
                                {!!Form::email('email',null,['class' => 'form-control input', 'style' => 'width:300px;', 'required' ])!!}
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <p style="color: red; text-align: center">{{ $errors->first('email') }}</p>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                {!!Form::label('password','Contraseña',['class' =>'col-md-4 control-label'])!!}
                                {!!Form::password('password',['class' => 'form-control input', 'style' => 'width:300px;', 'required'])!!}
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <p style="color: red; text-align: center">{{ $errors->first('password') }}</p>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                {!!Form::label('estado','Tipo de usuario',['class' =>'col-md-4 control-label'])!!}
                                {!!Form::select('tipo_usuario', ['administrador' => 'Administrador', 'empleado' => 'Empleado', 'administrativo' => 'Administrativo', 'secretaria' => 'Secretaria'], null, ['placeholder' => 'Seleccione...','style' => 'width:300px;'])!!}
                                @if ($errors->has('tipo_usuario'))
                                    <span class="help-block">
                                        <p style="color: red; text-align: center">{{ $errors->first('tipo_usuario') }}</p>
                                    </span>
                                @endif
                            </div>
                        </div>
                    <div class="box-footer">
                        <button type="button" class="btn btn-danger col-md-offset-4"><a href="{!! URL::to('/usuario') !!}" style="color: #ffffff">Atrás</a></button>
                        {!!Form::submit('Registrar',['class' => 'btn btn-primary col-md-offset-1'])!!}
                    {!!Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    @endsection









