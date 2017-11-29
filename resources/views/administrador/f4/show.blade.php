@extends('...administrador.index')
    @section('contenido')
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="tipoEquipo_id" class="col-xs-4 control-label">Equipo</label>
                <input type="text" class="form-control input" id="tipoEquipo_id" name="tipoEquipo_id" style="width: 200px;" disabled value="<?= $f4->tipo_equipo->nombre ?>">
            </div>
            <div class="form-group">
                <label for="marca_id" class="col-xs-4 control-label">Marca</label>
                <input type="text" class="form-control input" id="marca_id" name="marca_id" style="width: 200px;" disabled value="<?= $f4->marca->nombre ?>">
            </div>
            <div class="form-group">
                <label for="modelo_id" class="col-xs-4 control-label">Modelo</label>
                <input type="text" class="form-control input" id="modelo_id" name="modelo_id" style="width: 200px;" disabled value="<?= $f4->modelo->nombre ?>">
            </div>
            <div class="form-group">
                <label for="nserie" class="col-xs-4 control-label">N° Serie</label>
                <input type="text" class="form-control input" id="nserie" name="nserie" style="width: 200px;" disabled value="<?= $f4->nserie ?>">
            </div>
            <div class="form-group">
                <label for="cod_interno" class="col-xs-4 control-label">Cod. Interno</label>
            <input type="text" class="form-control input" id="cod_interno" name="cod_interno" style="width: 200px;" disabled value="<?= $f4->cod_interno ?>">
        </div>
        <div class="form-group">
            <label for="capacidad" class="col-xs-4 control-label">Capacidad</label>
            <input type="text" class="form-control input" id="capacidad" name="capacidad" style="width: 200px;" disabled value="<?= $f4->capacidad ?>">
        </div>
        <div class="form-group">
            <label for="clase_oiml" class="col-xs-4 control-label">Clase OIML</label>
            <input type="text" class="form-control input" id="clase_oiml" name="clase_oiml" style="width: 200px;" disabled value="<?= $f4->clase_oiml ?>">
        </div>
        <div class="form-group">
            <label for="error_max" class="col-xs-4 control-label">Error máx</label>
            <input type="text" class="form-control input" id="error_max" name="error_max" style="width: 200px;" disabled value="<?= $f4->error_max ?>">
        </div>
        <div class="form-group">
            <label for="ubicacion" class="col-xs-4 control-label">Lugar de almacenamiento</label>
            <input type="text" class="form-control input" id="ubicacion" name="ubicacion" style="width: 200px;" disabled value="<?= $f4->ubicacion ?>">
        </div>
        <div class="form-group">
            <label for="fcompra" class="col-xs-4 control-label">Fecha de compra</label>
            <input type="date" class="form-control input" id="fcompra" name="fcompra" style="width: 200px;" disabled value="<?= $f4->fcompra ?>">
        </div>
        <div class="form-group">
            <label for="norden_compra" class="col-xs-4 control-label">N° OC</label>
            <input type="text" class="form-control input" id="norden_compra" name="norden_compra" style="width: 200px;" disabled value="<?= $f4->norden_compra ?>">
        </div>
        <div class="form-group">
            <label for="proveedor" class="col-xs-4 control-label">Proveedor</label>
            <input type="text" class="form-control input" id="proveedor" name="proveedor" style="width: 200px;" disabled value="<?= $f4->proveedor ?>">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="intervalo_mantenimiento" class="col-xs-4 control-label">Intervalo de mantenimiento</label>
            <input type="text" class="form-control input" id="intervalo_mantenimiento" name="intervalo_mantenimiento" style="width: 200px;" disabled value="<?= $f4->intervalo_mantenimiento ?>">
        </div>
        <div class="form-group">
            <label for="pauta_mantencion" class="col-xs-4 control-label">Pauta de mantención</label>
            <input type="text" class="form-control input" id="pauta_mantencion" name="pauta_mantencion" style="width: 200px;" disabled value="<?= $f4->pauta_mantencion ?>">
        </div>
        <div class="form-group">
            <label for="intervalo_calibracion" class="col-xs-4 control-label">Intervalo de calibración</label>
            <input type="text" class="form-control input" id="intervalo_calibracion" name="intervalo_calibracion" style="width: 200px;" disabled value="<?= $f4->intervalo_calibracion ?>">
        </div>
        <div class="form-group">
            <label for="intervalo_verificacion" class="col-xs-4 control-label">Intervalo de verificación</label>
            <input type="text" class="form-control input" id="intervalo_verificacion" name="intervalo_verificacion" style="width: 200px;" disabled value="<?= $f4->intervalo_verificacion ?>">
        </div>
        <div class="form-group">
            <label for="criterio_aceptacion" class="col-xs-4 control-label">Criterio de aceptación</label>
            <input type="text" class="form-control input" id="criterio_aceptacion" name="criterio_aceptacion" style="width: 200px;" disabled value="<?= $f4->criterio_aceptacion ?>">
        </div>
        <div class="form-group">
            <label for="actividad" class="col-xs-4 control-label">Actividad</label>
            <input type="text" class="form-control input" id="actividad" name="actividad" style="width: 200px;" disabled value="<?= $f4->actividad ?>">
        </div>
        <div class="form-group">
            <label for="f_realizacion" class="col-xs-4 control-label">Fecha realización</label>
            <input type="date" class="form-control input" id="f_realizacion" name="f_realizacion" style="width: 200px;" disabled value="<?= $f4->f_realizacion ?>">
        </div>
        <div class="form-group">
            <label for="f_proxima" class="col-xs-4 control-label">Fecha próxima</label>
            <input type="date" class="form-control input" id="f_proxima" name="f_proxima" style="width: 200px;" disabled value="<?= $f4->f_proxima ?>">
        </div>
        <div class="form-group">
            <label for="realizado_por" class="col-xs-4 control-label">Realizado por</label>
            <input type="text" class="form-control input" id="realizado_por" name="realizado_por" style="width: 200px;" disabled value="<?= $f4->realizado_por ?>">
        </div>
        <div class="form-group">
            <label for="ncertificado" class="col-xs-4 control-label">N° de certificado</label>
            <input type="text" class="form-control input" id="ncertificado" name="ncertificado" style="width: 200px;" disabled value="<?= $f4->ncertificado ?>">
        </div>
        <div class="form-group">
            <label for="observacion" class="col-xs-4 control-label">Observación</label>
            <input type="text" class="form-control input" id="observacion" name="observacion" style="width: 200px;" disabled value="<?= $f4->observacion ?>">
        </div>
    </div>
</div>
<div class="row">
    <div class="form-group col-md-12">
        <label for="observaciones">Observaciones</label>
        <textarea class="form-control observaciones" id="observaciones" name="observaciones" rows="3" cols="40" disabled value="<?= $f4->observaciones ?>"></textarea>
    </div>
</div>
<div class="form-group">
    <label>Imagen Equipo</label>
    <br>
    <img src="{{asset('imagenes/equipos/'.$f4->foto)}}" height="300px;" width="300px;">
</div>
<div class="form-group">
    <button type="button" class=".btn btn-danger btn-flat col-md-offset-5"><a href="{!! URL::to('/f4') !!}" style="color: #ffffff">Atrás</a></button>
</div>

@endsection