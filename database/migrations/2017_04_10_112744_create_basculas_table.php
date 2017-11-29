<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basculas', function (Blueprint $table) {
            $table->increments('idBascula');
            $table->integer('f37_id')->unsigned()->nullable();
            $table->foreign('f37_id')->references('numero')->on('f37s')->onDelete('cascade');
            $table->integer('cantidad');
            $table->integer('tipoEquipo_id')->unsigned()->nullable();
            $table->foreign('tipoEquipo_id')->references('id')->on('tipos_equipos')->onDelete('cascade');
            $table->integer('marca_id')->unsigned()->nullable();
            $table->foreign('marca_id')->references('id')->on('marcas')->onDelete('cascade');
            $table->integer('modelo_id')->unsigned()->nullable();
            $table->foreign('modelo_id')->references('id')->on('modelos')->onDelete('cascade');
            $table->integer('tipo_id')->unsigned()->nullable();
            $table->foreign('tipo_id')->references('id')->on('tipos')->onDelete('cascade');
            $table->integer('puntos');
            $table->string('pesaje_mop');
            $table->integer('capacidad');
            $table->integer('unidadc_id')->unsigned()->nullable();
            $table->foreign('unidadc_id')->references('id')->on('unidades')->onDelete('cascade');
            $table->integer('graduacion');
            $table->integer('unidadg_id')->unsigned()->nullable();
            $table->foreign('unidadg_id')->references('id')->on('unidades')->onDelete('cascade');
            $table->integer('condicion_id')->unsigned()->nullable();
            $table->foreign('condicion_id')->references('id')->on('condiciones')->onDelete('cascade');
            $table->date('fu_mantencion');
            $table->date('fu_calibracion');
            $table->integer('v_unitario')->nullable();
            $table->integer('subtotal')->nullable();
            $table->integer('totalbas')->nullable();
            $table->date('f_tentativa');
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
        Schema::drop('basculas');
    }
}
