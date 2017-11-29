<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePesometrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pesometros', function (Blueprint $table) {
            $table->increments('idPesometro');
            $table->integer('f37_id')->unsigned()->nullable();
            $table->foreign('f37_id')->references('numero')->on('f37s')->onDelete('cascade');
            $table->integer('cantidad4');
            $table->integer('tipoEquipo4_id')->unsigned()->nullable();
            $table->foreign('tipoEquipo4_id')->references('id')->on('tipos_equipos')->onDelete('cascade');
            $table->integer('marca4_id')->unsigned()->nullable();
            $table->foreign('marca4_id')->references('id')->on('marcas')->onDelete('cascade');
            $table->integer('modelo4_id')->unsigned()->nullable();
            $table->foreign('modelo4_id')->references('id')->on('modelos')->onDelete('cascade');
            $table->integer('capacidad3');
            $table->integer('unidadc3_id')->unsigned()->nullable();
            $table->foreign('unidadc3_id')->references('id')->on('unidades')->onDelete('cascade');
            $table->string('rango_uso');
            $table->integer('condicion4_id')->unsigned()->nullable();
            $table->foreign('condicion4_id')->references('id')->on('condiciones')->onDelete('cascade');
            $table->date('fu_mantencion3');
            $table->date('fu_calibracion3');
            $table->integer('v_unitario4')->nullable();
            $table->integer('subtotal4')->nullable();
            $table->integer('totalpe')->nullable();
            $table->date('f_tentativa4');
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
        Schema::drop('pesometros');
    }
}
