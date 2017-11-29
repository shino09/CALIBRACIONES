<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBalanzasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('balanzas', function (Blueprint $table) {
            $table->increments('idBalanza');
            $table->integer('f37_id')->unsigned()->nullable();
            $table->foreign('f37_id')->references('numero')->on('f37s')->onDelete('cascade');
            $table->integer('cantidad2');
            $table->integer('tipoEquipo2_id')->unsigned()->nullable();
            $table->foreign('tipoEquipo2_id')->references('id')->on('tipos_equipos')->onDelete('cascade');
            $table->integer('marca2_id')->unsigned()->nullable();
            $table->foreign('marca2_id')->references('id')->on('marcas')->onDelete('cascade');
            $table->integer('modelo2_id')->unsigned()->nullable();
            $table->foreign('modelo2_id')->references('id')->on('modelos')->onDelete('cascade');
            $table->integer('tipo2_id')->unsigned()->nullable();
            $table->foreign('tipo2_id')->references('id')->on('tipos')->onDelete('cascade');
            $table->integer('puntos2');
            $table->integer('capacidad2');
            $table->integer('unidadc2_id')->unsigned()->nullable();
            $table->foreign('unidadc2_id')->references('id')->on('unidades')->onDelete('cascade');
            $table->integer('graduacion2');
            $table->integer('unidadg2_id')->unsigned()->nullable();
            $table->foreign('unidadg2_id')->references('id')->on('unidades')->onDelete('cascade');
            $table->integer('condicion2_id')->unsigned()->nullable();
            $table->foreign('condicion2_id')->references('id')->on('condiciones')->onDelete('cascade');
            $table->date('fu_mantencion2');
            $table->date('fu_calibracion2');
            $table->integer('v_unitario2')->nullable();
            $table->integer('subtotal2')->nullable();
            $table->integer('totalba')->nullable();
            $table->date('f_tentativa2');
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
        Schema::drop('balanzas');
    }
}
