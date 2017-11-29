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
                        <h3 class="box-title">Lista de tipos de equipos de pesaje</h3>
                    </div>
                    <div class="box-body">

        @if(count($tipos_equipos)>0)
            <table id="tipo_equipo" class="table table-bordered table-hover">
                <thead>
                    <th>Tipo de equipo de pesaje</th>
                    <th>Opciones</th>
                </thead>
                <tbody>
                    @foreach($tipos_equipos as $tipo_equipo)
                        <tr>
                            <td>{{$tipo_equipo->nombre}}</td>
                            <td>{!!link_to_route('tipo_equipo.edit',$title ='Editar',$parameters = $tipo_equipo->id,$attributes = ['class' => 'btn  btn-success btn-xs'])!!}
                                <a href="" data-target="#modal-delete-{{$tipo_equipo->id}}" data-toggle="modal"><button class="btn btn-danger btn-xs">Eliminar</button></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                @include('administrador.tipos_equipos.modal')
            </table>
            {!!$tipos_equipos->render()!!}
        @else
            <br/><div class='alert alert-warning'><label>No existe ningún tipo de equipo dentro de la lista</label></div>
        @endif
                    <div class="form-group has-feedback">
                        <button class="btn btn-primary col-md-offset-5"><a href="{!!URL::to('/tipo_equipo/create') !!}" style="color: #ffffff">Agregar Tipo Equipo</a></button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @section('scripts')
            <script type="text/javascript">
                $(document).ready(function(){
                    $("#tipo_equipo").DataTable({
                    });
                });
            </script>
    @endsection