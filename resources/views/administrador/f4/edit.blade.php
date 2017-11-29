@extends('...administrador.index')
    @section('contenido')
           @if(count($errors)>0)
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{!! $error !!}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="box-header with-border">
                    <h3 class="box-title">Actualizar equipo(Empresa)</h3>
                </div><!-- /.box-header -->
                {!!Form::model($f4,['route' => ['f4.update',$f4 -> id],'method' => 'PUT', 'enctype'=> 'multipart/form-data'])!!}
                    @include('f4.formularios.f42')
<button type="button" class=".btn btn-danger btn-flat col-md-offset-4"><a href="{!! URL::to('/f4') !!}" style="color: #ffffff">Atrás</a></button>
                    {!!Form::submit('Actualizar',['class' => '.btn btn-primary col-md-offset-1'])!!}

                {!!Form::close()!!}
    @endsection



