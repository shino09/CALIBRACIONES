@extends('......empleado.home2')
    @section('contenido')
        <div class="error-page">
            <h2 class="headline text-red">401</h2>
                <div class="error-content">
                    <h3><i class="fa fa-warning text-red"></i> Acceso restringido</h3>
                    <div class="panel-body">
                        <img src="imagenes/empresa/candado.png">
                    </div>
                    <strong><p>Usted no tiene permisos a esta sección</p></strong>
                </div>
                <!-- /.error-content -->
        </div>
        <!-- /.error-page -->
    @endsection