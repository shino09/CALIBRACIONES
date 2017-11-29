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
                        <h3 class="box-title">Lista de equipos de la empresa</h3>
                    </div>
                    <div class="box-body">
                    @if(count($f4s)>0)
                            <table id="equipo" class="table table-bordered table-hover">
                                <thead>
                                    <th>Equipo</th>
                                    <th>Marca</th>
                                    <th>Modelo</th>
                                    <th>Opciones</th>
                                </thead>
                                <tbody>
                                @foreach($f4s as $f4)
                                    <tr>
                                        <td>{{$f4->tipo_equipo->nombre}}</td>
                                        <td>{{$f4->marca->nombre}}</td>
                                        <td>{{$f4->modelo->nombre}}</td>
                                        <td>{!!link_to_route('f4.show',$title ='Ver',$parameters = $f4->id,$attributes = ['class' => 'btn  btn-warning btn-xs'])!!}
                                            {!!link_to_route('f4.edit',$title ='Editar',$parameters = $f4->id,$attributes = ['class' => 'btn  btn-success btn-xs'])!!}
                                            <a href="descargar_f4/<?= $f4->id  ?>"><button class=".btn  bg-navy btn-xs">Descargar</button></a>
                                            <a href="" data-target="#modal-delete-{{$f4->id}}" data-toggle="modal"><button class="btn btn-danger btn-xs">Eliminar</button></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                @include('...f4.modal')
                            </table>
                            @else
                                <br/><div class='alert alert-warning'><label>No existe ningún equipo dentro de la lista</label></div>
                            @endif
                    <div class="form-group has-feedback">
                        <button class="btn btn-primary col-md-offset-5"><a href="{!!URL::to('/f4/create') !!}" style="color: #ffffff">Agregar Equipo</a></button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @section('scripts')
            <script type="text/javascript">
                $(document).ready(function(){
                    $("#equipo").DataTable({
                    });
                });
            </script>
    @endsection