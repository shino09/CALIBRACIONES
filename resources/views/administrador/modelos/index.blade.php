@extends('administrador.home')
    @section('contenido')
        @if(Session::has('mensaje'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{Session::get('mensaje')}}
            </div>
        @endif
        @if(Session::has('mensaje2'))
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                {{Session::get('mensaje2')}}
            </div>
        @endif
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Lista de modelos pertenecientes a las marcas de los equipos de pesaje</h3>
                    </div>
                    <div class="box-body">
@if(count($modelos)>0)
            <table id="modelo" class="table table-bordered table-hover">
                <thead>
                    <th>Modelo equipo de pesaje</th>
                    <th>Marca equipo de pesaje</th>
                    <th>Opciones</th>
                </thead>
                <tbody>
                    @foreach($modelos as $modelo)
                    <tr>
                        <td>{{$modelo->nombre}}</td>
                        <td>{{$modelo->marca->nombre}}</td>
                        <td>{!!link_to_route('modelo.edit',$title ='Editar',$parameters = $modelo->id,$attributes = ['class' => 'btn  btn-success btn-xs'])!!}
                            <a href="" data-target="#modal-delete-{{$modelo->id}}" data-toggle="modal"><button class="btn btn-danger btn-xs">Eliminar</button></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                @include('administrador.modelos.modal')
            </table>
            {!!$modelos->render()!!}
        @else
            <br/><div class='alert alert-warning'><label>No existe ningún modelo de equipo dentro de la lista</label></div>
        @endif
        <div class="form-group has-feedback">
            <button class="btn btn-primary col-md-offset-5"><a href="{!!URL::to('/modelo/create') !!}" style="color: #ffffff">Agregar Modelo</a></button>
        </div>
        </div>
                </div>
            </div>
        </div>
    @endsection
    @section('scripts')
            <script type="text/javascript">
                $(document).ready(function(){
                    $("#modelo").DataTable({
                    });
                });
            </script>
    @endsection