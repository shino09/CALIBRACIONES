<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoEquipo extends Model
{
    protected $table = 'tipos_equipos';

    protected $fillable = ['nombre'];

    public function marca()
    {
        return $this->hasMany('App\Marca');
    }

    public function tipo()
    {
        return $this->hasMany('App\Tipo');
    }

    public function unidad()
    {
        return $this->hasMany('App\Unidad');
    }

    public function bascula()
    {
        return $this->hasMany('App\Bascula');
    }

    public function condiciones()
    {
        return $this->hasMany('App\Condicion');
    }

    public function f4()
    {
        return $this->hasMany('App\F4');
    }
}
