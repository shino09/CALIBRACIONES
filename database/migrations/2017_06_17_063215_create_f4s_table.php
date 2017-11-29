<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateF4sTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('f4s', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipoEquipo_id')->unsigned()->nullable();
            $table->foreign('tipoEquipo_id')->references('id')->on('tipos_equipos')->onDelete('cascade');
            $table->integer('marca_id')->unsigned()->nullable();
            $table->foreign('marca_id')->references('id')->on('marcas')->onDelete('cascade');
            $table->integer('modelo_id')->unsigned()->nullable();
            $table->foreign('modelo_id')->references('id')->on('modelos')->onDelete('cascade');
            $table->string('nserie');
            $table->string('cod_interno');
            $table->string('capacidad');
            $table->string('clase_oiml');
            $table->float('error_max');
            $table->string('ubicacion');
            $table->date('fcompra');
            $table->string('norden_compra');
            $table->string('proveedor');
            $table->string('intervalo_mantenimiento');
            $table->date('fecha_mantenimiento');
            $table->string('avisar');
            $table->string('pauta_mantencion');
            $table->string('intervalo_calibracion');
            $table->string('intervalo_verificacion');
            $table->string('criterio_aceptacion');
            $table->mediumText('observaciones');
            $table->string('actividad');
            $table->date('f_realizacion');
            $table->date('f_proxima');
            $table->string('realizado_por');
            $table->string('ncertificado');
            $table->mediumText('observacion');
            $table->string('foto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('f4s');
    }
}
