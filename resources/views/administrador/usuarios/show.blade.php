@extends('...administrador.home')
    @section('contenido')
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Información usuario</h3>
                    </div>
                    {!!Form::model($usuario,['route' => ['usuario.update',$usuario -> id],'method' => 'PUT'])!!}
                        <div class="box-body">
                            <div class="form-group">
                                {!!Form::label('rut_usuario','Rut',['class' =>'col-md-4 control-label'])!!}
                                {!!Form::text('rut_usuario',null,['class' => 'form-control input', 'style' => 'width:300px;', 'onKeyPress' => 'return SoloNumeros(event);', 'disabled'])!!}
                            </div>
                            <div class="form-group">
                                {!!Form::label('name','Nombres',['class' =>'col-md-4 control-label'])!!}
                                {!!Form::text('name',null,['class' => 'form-control input', 'style' => 'width:300px;', 'disabled'])!!}
                            </div>
                            <div class="form-group">
                                {!!Form::label('apellido_paterno','Apellido Paterno',['class' =>'col-md-4 control-label'])!!}
                                {!!Form::text('apellido_paterno',null,['class' => 'form-control input', 'style' => 'width:300px;', 'disabled'])!!}
                            </div>
                            <div class="form-group">
                                {!!Form::label('apellido_materno','Apellido Materno',['class' =>'col-md-4 control-label'])!!}
                                {!!Form::text('apellido_materno',null,['class' => 'form-control input', 'style' => 'width:300px;', 'disabled'])!!}
                            </div>
                            <div class="form-group">
                                {!!Form::label('email','Correo electrónico',['class' =>'col-md-4 control-label'])!!}
                                {!!Form::email('email',null,['class' => 'form-control input', 'style' => 'width:300px;', 'required', 'disabled'])!!}
                            </div>
                            <div class="form-group">
                                {!!Form::label('estado','Tipo de usuario',['class' =>'col-md-4 control-label'])!!}
                                {!!Form::select('tipo_usuario', ['administrador' => 'Administrador', 'empleado' => 'Empleado', 'administrativo' => 'Administrativo', 'secretaria' => 'Secretaria'], null, ['placeholder' => 'Seleccione...','style' => 'width:300px;', 'disabled'])!!}
                            </div>
                        </div>
                    <div class="box-footer">
                        <button type="button" class="btn btn-danger col-md-offset-5"><a href="{!! URL::to('/usuario') !!}" style="color: #ffffff">Atrás</a></button>
                    {!!Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    @endsection









