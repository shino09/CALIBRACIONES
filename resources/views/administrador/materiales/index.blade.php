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
                        <h3 class="box-title">Lista de materiales pertenecientes a las masas</h3>
                    </div>
                    <div class="box-body">
@if(count($materiales)>0)
            <table id="material" class="table table-bordered table-hover">
                <thead>
                    <th>Material del tipo de equipo</th>
                    <th>Tipo equipo de pesaje</th>
                    <th>Opciones</th>
                </thead>
                <tbody>
                    @foreach($materiales as $material)
                        <tr>
                            <td>{{$material->nombre}}</td>
                            <td>{{$material->tipo_equipo->nombre}}</td>
                            <td>{!!link_to_route('material.edit',$title ='Editar',$parameters = $material->id,$attributes = ['class' => 'btn  btn-success btn-xs'])!!}
                                <a href="" data-target="#modal-delete-{{$material->id}}" data-toggle="modal"><button class="btn btn-danger btn-xs">Eliminar</button></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                @include('administrador.materiales.modal')
            </table>
            {!!$materiales->render()!!}
        @else
            <br/><div class='alert alert-warning'><label>No existe ningún material dentro de la lista</label></div>
        @endif
        <div class="form-group has-feedback">
            <button class="btn btn-primary col-md-offset-5"><a href="{!!URL::to('/material/create') !!}" style="color: #ffffff">Agregar Material</a></button>
        </div>
        </div>
                </div>
            </div>
        </div>
    @endsection
    @section('scripts')
            <script type="text/javascript">
                $(document).ready(function(){
                    $("#material").DataTable({
                    });
                });
            </script>
    @endsection