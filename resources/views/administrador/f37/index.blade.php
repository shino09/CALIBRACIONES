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
                    <h3 class="box-title">Lista de solicitudes de cotización</h3>
                </div>
                <div class="box-body">
                @if(count($f37s)>0)
                        <table id="f37" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>N°</th>
                                <th>Cliente</th>
                                <th>Fecha Solicitud</th>
                                <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($f37s as $f37)
                                <tr>
                                    <td>{{$f37->numero}}</td>
                                    <td>{{$f37->cliente->nombre}}</td>
                                    <td>{{date('d-m-Y', strtotime($f37->fecha_solicitud))}}</td>
                                    <td>{!!link_to_route('f37.show',$title ='Ver',$parameters = $f37->numero,$attributes = ['class' => 'btn  btn-warning btn-xs'])!!}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        @else
                            <br><div class='alert alert-warning'><label>No existe ninguna solicitud F-37 asociada dentro de la lista</label></div>
                        @endif
                        <div class="form-group has-feedback">
                                                <button class="btn btn-primary col-md-offset-5"><a href="{!!URL::to('/f37/create') !!}" style="color: #ffffff">Agregar Solicitud</a></button>
                                            </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
    @section('scripts')
            <script type="text/javascript">
                $(document).ready(function(){
                    $("#f37").DataTable({
                    });
                });
            </script>
    @endsection

