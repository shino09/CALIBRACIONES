<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="tipoEquipo_id" class="col-xs-4 control-label">Tipo Equipo pesaje</label>
            <select name="tipoEquipo_id" id="tipoEquipo_id" class="tipoEquipo_id" style="width: 200px;">
                <option value="0" selected="true" disabled="true" class="form-control" style="height: 26px; text-align: center; margin: 0px;">Seleccione</option>
                    @foreach($tipos_equipos as $key =>$tipo_equipo)
                        <option value="{!!$key!!}">{!!$tipo_equipo!!}</option>
                    @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="marca_id" class="col-xs-4 control-label">Marca</label>
            <select name="marca_id" id="marca_id" class="marca_id" style="width: 200px;">
                <option value="0" selected="true" disabled="true" class="form-control" style="height: 26px; text-align: center; margin: 0px;">Seleccione</option>
                    @foreach($marcas as $key =>$marca)
                        <option value="{!!$key!!}">{!!$marca!!}</option>
                    @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="modelo_id" class="col-xs-4 control-label">Modelo</label>
            <select name="modelo_id" id="modelo_id" class="modelo_id" style="width: 200px;">
                <option value="0" selected="true" disabled="true" class="form-control" style="height: 26px; text-align: center; margin: 0px;">Seleccione</option>
                    @foreach($modelos as $key =>$modelo)
                        <option value="{!!$key!!}">{!!$modelo!!}</option>
                    @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="nserie" class="col-xs-4 control-label">N° Serie</label>
            <input type="text" class="form-control input" id="nserie" name="nserie" style="width: 200px;">
        </div>
        <div class="form-group">
            <label for="cod_interno" class="col-xs-4 control-label">Cod. Interno</label>
            <input type="text" class="form-control input" id="cod_interno" name="cod_interno" style="width: 200px;">
        </div>
        <div class="form-group">
            <label for="capacidad" class="col-xs-4 control-label">Capacidad</label>
            <input type="text" class="form-control input" id="capacidad" name="capacidad" style="width: 200px;">
        </div>
        <div class="form-group">
            <label for="unidadc_id" class="col-xs-4 control-label">Unidad Capacidad</label>
            <select name="unidadc_id" id="unidadc_id" class="unidac_id" style="width: 200px;">
                <option value="0" selected="true" disabled="true" class="form-control" style="height: 26px; text-align: center; margin: 0px;">Seleccione</option>
                    @foreach($unidades as $key =>$unidad)
                        <option value="{!!$key!!}">{!!$unidad!!}</option>
                    @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="clase_oiml" class="col-xs-4 control-label">Clase OIML</label>
            <input type="text" class="form-control input" id="clase_oiml" name="clase_oiml" style="width: 200px;">
        </div>
        <div class="form-group">
            <label for="error_max" class="col-xs-4 control-label">Error máx</label>
            <input type="text" class="form-control input" id="error_max" name="error_max" style="width: 200px;">
        </div>
        <div class="form-group">
            <label for="ubicacion" class="col-xs-4 control-label">Ubicación</label>
            <input type="text" class="form-control input" id="ubicacion" name="ubicacion" style="width: 200px;">
        </div>
        <div class="form-group">
            <label for="fcompra" class="col-xs-4 control-label">Fecha de compra</label>
            <input type="date" class="form-control input" id="fcompra" name="fcompra" style="width: 200px;">
        </div>
        <div class="form-group">
            <label for="norden_compra" class="col-xs-4 control-label">N° OC</label>
            <input type="text" class="form-control input" id="norden_compra" name="norden_compra" style="width: 200px;">
        </div>
        <div class="form-group">
            <label for="proveedor" class="col-xs-4 control-label">Proveedor</label>
            <input type="text" class="form-control input" id="proveedor" name="proveedor" style="width: 200px;">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="intervalo_mantenimiento" class="col-xs-4 control-label">I. de mantenimiento</label>
            <input type="text" class="form-control input" id="intervalo_mantenimiento" name="intervalo_mantenimiento" style="width: 200px;">
        </div>
        <div class="form-group">
            <label for="pauta_mantencion" class="col-xs-4 control-label">Pauta de mantención</label>
            <input type="text" class="form-control input" id="pauta_mantencion" name="pauta_mantencion" style="width: 200px;">
        </div>
        <div class="form-group">
            <label for="intervalo_calibracion" class="col-xs-4 control-label">I. de calibración</label>
            <input type="text" class="form-control input" id="intervalo_calibracion" name="intervalo_calibracion" style="width: 200px;">
        </div>
        <div class="form-group">
            <label for="intervalo_verificacion" class="col-xs-4 control-label">I. de verificación</label>
            <input type="text" class="form-control input" id="intervalo_verificacion" name="intervalo_verificacion" style="width: 200px;">
        </div>
        <div class="form-group">
            <label for="criterio_aceptacion" class="col-xs-4 control-label">Criterio de aceptación</label>
            <input type="text" class="form-control input" id="criterio_aceptacion" name="criterio_aceptacion" style="width: 200px;">
        </div>
        <div class="form-group">
            <label for="actividad" class="col-xs-4 control-label">Actividad</label>
            <input type="text" class="form-control input" id="actividad" name="actividad" style="width: 200px;">
        </div>
        <div class="form-group">
            <label for="f_realizacion" class="col-xs-4 control-label">Fecha realización</label>
            <input type="date" class="form-control input" id="f_realizacion" name="f_realizacion" style="width: 200px;">
        </div>
        <div class="form-group">
            <label for="f_proxima" class="col-xs-4 control-label">Fecha próxima</label>
            <input type="date" class="form-control input" id="f_proxima" name="f_proxima" style="width: 200px;">
        </div>
        <div class="form-group">
            <label for="realizado_por" class="col-xs-4 control-label">Realizado por</label>
            <input type="text" class="form-control input" id="realizado_por" name="realizado_por" style="width: 200px;">
        </div>
        <div class="form-group">
            <label for="ncertificado" class="col-xs-4 control-label">N° de certificado</label>
            <input type="text" class="form-control input" id="ncertificado" name="ncertificado" style="width: 200px;">
        </div>
        <div class="form-group">
            <label for="observacion" class="col-xs-4 control-label">Observación</label>
            <input type="text" class="form-control input" id="observacion" name="observacion" style="width: 200px;">
        </div>
        <div class="form-group">
            <label for="foto" class="col-xs-4 control-label">Imagen Equipo</label>
            <input type="file" class="form-control input" id="foto" name="foto" style="width: 350px;">
        </div>
    </div>
</div>
<div class="row">
    <div class="form-group col-md-11">
        <label for="observaciones">Observaciones</label>
        <textarea class="form-control observaciones" id="observaciones" name="observaciones" rows="3" cols="40"></textarea>
    </div>
</div>
