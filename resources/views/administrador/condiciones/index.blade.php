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
                        <h3 class="box-title">Lista de condiciones de los equipos de pesaje</h3>
                    </div>
                    <div class="box-body">
                    @if(count($condiciones)>0)
                        <table id="condicion" class="table table-bordered table-hover">
                            <thead>
                                <th>Condición tipo de equipo de pesaje</th>
                                <th>Tipo equipo de pesaje</th>
                                <th>Opciones</th>
                            </thead>
                <tbody>
                    @foreach($condiciones as $condicion)
                        <tr>
                            <td>{{$condicion->nombre}}</td>
                            <td>{{$condicion->tipo_equipo->nombre}}</td>
                            <td>{!!link_to_route('condicion.edit',$title ='Editar',$parameters = $condicion->id,$attributes = ['class' => 'btn  btn-success btn-xs'])!!}
                            <a href="" data-target="#modal-delete-{{$condicion->id}}" data-toggle="modal"><button class="btn btn-danger btn-xs">Eliminar</button></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                @include('administrador.condiciones.modal')
            </table>
            {!!$condiciones->render()!!}
        @else
            <br/><div class='alert alert-warning'><label>No existe ninguna condición de equipo dentro de la lista</label></div>
                    @endif
        <div class="form-group has-feedback">
            <button class="btn btn-primary col-md-offset-5"><a href="{!!URL::to('/condicion/create') !!}" style="color: #ffffff">Agregar Condición</a></button>
        </div>
        </div>
                </div>
            </div>
        </div>
    @endsection
    @section('scripts')
            <script type="text/javascript">
                $(document).ready(function(){
                    $("#condicion").DataTable({
                    });
                });
            </script>
    @endsection