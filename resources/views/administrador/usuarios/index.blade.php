@extends('...administrador.home')
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
                        <h3 class="box-title">Lista de usuarios</h3>
                    </div>
                    <div class="box-body">
                        @if(count($usuarios)>0)
                            <table id="usuario" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Rut</th>
                                        <th>Nombres</th>
                                        <th>Apellido Paterno</th>
                                        <th>Rol</th>
                                        <th>Estado</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($usuarios as $usuario)
                                        <tr>
                                            <td>{{$usuario->id}}</td>
                                            <td>{{$usuario->rut_usuario}}</td>
                                            <td>{{$usuario->name}}</td>
                                            <td>{{$usuario->apellido_paterno}}</td>
                                            <td>{{$usuario->tipo_usuario}}</td>
                                            <td>
                                                @if($usuario->estado == 'Activo')
                                                    <a href="" data-target="#modal-delete-{{$usuario->id}}" data-toggle="modal"><button class="btn btn-primary btn-xs">Activo</button></a>
                                                @elseif($usuario->estado == 'Suspendido')
                                                    <a href="" data-target="#modal-delete-{{$usuario->id}}" data-toggle="modal"><button class="btn btn-danger btn-xs">Suspendido</button></a>
                                                @endif
                                            </td>
                                            <td>{!!link_to_route('usuario.edit',$title ='Editar',$parameters = $usuario->id,$attributes = ['class' => 'btn  btn-success btn-xs'])!!}
                                                {!!link_to_route('usuario.show',$title ='Detalles',$parameters = $usuario->id,$attributes = ['class' => 'btn  btn-warning btn-xs'])!!}</td>
                                        </tr>
                                        @if($usuario->estado == 'Activo')
                                            @include('administrador.usuarios.modal')
                                        @elseif($usuario->estado == 'Suspendido')
                                            @include('administrador.usuarios.modal2')
                                        @endif
                                    @endforeach
                                </tbody>
                            </table>
                            {!!$usuarios->render()!!}
                        @else
                            <br/><div class='alert alert-warning'><label>No existe ningún usuario dentro de la lista</label></div>
                        @endif
                        <div class="form-group has-feedback">
                            <button class="btn btn-primary col-md-offset-5"><a href="{!!URL::to('/usuario/create') !!}" style="color: #ffffff">Agregar Usuario</a></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
    @section('scripts')
        <script type="text/javascript">
            $(function () {
                $('#usuario').DataTable()

              })
        </script>
    @endsection