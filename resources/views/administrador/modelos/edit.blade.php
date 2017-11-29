@extends('...administrador.home')
    @section('contenido')
        <div class="row">
            <div class="col-md-7 col-md-offset-3">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Actualizar información modelo asociado a marca de equipo de pesaje</h3>
                    </div>
                    {!!Form::model($modelo,['route' => ['modelo.update',$modelo -> id],'method' => 'PUT'])!!}
                        <div class="box-body">
                            <div class="form-group">
                                {!!Form::label('nombre','Modelo',['class' => 'col-md-4 control-label'])!!}
                                {!!Form::text('nombre',null,['class' => 'form-control input', 'style' => 'width: 300px;'])!!}
                                @if ($errors->has('nombre'))
                                    <span class="help-block">
                                        <p style="color: red; text-align: center">{{ $errors->first('nombre') }}</p>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                {!!Form::label('marca_id','Marca',['class' => 'col-md-4 control-label'])!!}
                                        <th><select id="marca_id" name="marca_id" style="width: 300px;">
                                            <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                            @foreach($marcas as $key =>$marca)
                                                <option value="{!!$key!!}">{!!$marca!!}</option>
                                            @endforeach
                                        </select></th>
                                @if ($errors->has('marca_id'))
                                    <span class="help-block">
                                        <p style="color: red; text-align: center">{{ $errors->first('marca_id') }}</p>
                                    </span>
                                @endif
                            </div>
                        </div>
                    <div class="box-footer">
                        <button type="button" class="btn btn-danger col-md-offset-4"><a href="{!! URL::to('/modelo') !!}" style="color: #ffffff">Atrás</a></button>
                        {!!Form::submit('Actualizar',['class' => 'btn btn-primary col-md-offset-1'])!!}
                    {!!Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    @endsection









