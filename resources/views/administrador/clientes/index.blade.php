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
                        <h3 class="box-title">Lista de clientes</h3>
                    </div>
                    <div class="box-body">
                    @if(count($clientes)>0)
                    <table id="cliente" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>Rut</th>
                                <th>Ciudad</th>
                                <th>Dirección</th>
                                <th>Estado</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($clientes as $cliente)
                                <tr>
                                    <td>{{$cliente->id}}</td>
                                    <td>{{$cliente->nombre}}</td>
                                    <td>{{$cliente->rut_cliente}}</td>
                                    <td>{{$cliente->ubicacion}}</td>
                                    <td>{{$cliente->planta}}</td>
                                    @if($cliente->estado == 'Activo')
                                        <td><strong style="color: green">{{$cliente->estado}}</strong></td>
                                    @elseif($cliente->estado == 'Suspendido')
                                        <td><strong style="color: red">{{$cliente->estado}}</strong></td>
                                    @endif
                                    <td>{!!link_to_route('cliente.edit',$title ='Editar',$parameters = $cliente->id,$attributes = ['class' => 'btn  btn-success btn-xs'])!!}
                                    @if($cliente->estado == 'Activo')
                                        <a href="" data-target="#modal-delete-{{$cliente->id}}" data-toggle="modal"><button class="btn btn-danger btn-xs">Suspender</button></a>
                                    @elseif($cliente->estado == 'Suspendido')
                                        <a href="" data-target="#modal-delete-{{$cliente->id}}" data-toggle="modal"><button class="btn btn-primary btn-xs">Activar</button></a>
                                    @endif
                                    </td>
                                </tr>
                                @if($cliente->estado == 'Activo')
                                    @include('administrador.clientes.modal')
                                    @elseif($cliente->estado == 'Suspendido')
                                    @include('administrador.clientes.modal2')
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                    {!!$clientes->render()!!}
                    @else
                        <br/><div class='alert alert-warning'><label>No existe ningún cliente dentro de la lista</label></div>
                    @endif
                    <div class="form-group has-feedback">
                        <button class="btn btn-primary col-md-offset-5"><a href="{!!URL::to('/cliente/create') !!}" style="color: #ffffff">Agregar Cliente</a></button>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @section('scripts')
            <script type="text/javascript">
                $(document).ready(function(){
                    $("#cliente").DataTable({
                    });
                });
            </script>
    @endsection