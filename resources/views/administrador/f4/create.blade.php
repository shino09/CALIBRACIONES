@extends('...administrador.home')
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
                <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Ingresar nuevo equipo empresa</h3>
                </div><!-- /.box-header -->
                {!!Form::open(['route' => 'f4.store','method' => 'POST', 'enctype'=> 'multipart/form-data'])!!}
                    @include('administrador.f4.formularios.f4')
                     <div class="box-footer">
                    <button type="button" class="btn btn-danger btn-flat col-md-offset-4"><a href="{!! URL::to('/f4') !!}" style="color: #ffffff">Atrás</a></button>
                    {!!Form::submit('Registrar',['class' => 'btn btn-primary col-md-offset-1'])!!}
                    </div>
                {!!Form::close()!!}
</div>
    @endsection



