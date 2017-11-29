<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class F4 extends Model
{
    protected $table = 'f4s';

    //protected $fillable = ['nserie'];

    public function marca()
    {
        return $this->belongsTo('App\Marca','marca_id');
    }

    public function modelo()
    {
        return $this->belongsTo('App\Modelo','modelo_id');
    }

    public function tipo_equipo()
    {
        return $this->belongsTo('App\TipoEquipo','tipoEquipo_id');
    }
}
