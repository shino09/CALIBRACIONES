@extends('...administrador.index')
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
        @if(count($f5s)>0)
        <table id="lequipo" class="cell-border">
            <thead>
                <th>Equipo</th>
                <th>N° de serie</th>
                <th>N° de certificado</th>
                <th>Lugar de almacenamiento</th>
            </thead>
            <tbody>
            @foreach($f5s as $f5)
                <tr>
                    <td>{{$f5->tipo_equipo->nombre}}</td>
                    <td>{{$f5->nserie}}</td>
                    <td>{{$f5->ncertificado}}</td>
                    <td>{{$f5->ubicacion}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        @else
            <br/><div class='alert alert-warning'><label>No existe ningún equipo dentro de la lista</label></div>
        @endif
        <div class="form-group has-feedback">
            <a href="descargar_f5"><button class=".btn btn-primary col-md-offset-5">Descargar</button></a>
        </div>
    @endsection
    @section('scripts')
        <script type="text/javascript">
            $(document).ready(function(){
                $("#lequipo").DataTable({
                });
            });
        </script>
    @endsection