<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $table = 'marcas';

    protected $fillable =['nombre','tipoEquipo_id'];

    public function tipo_equipo()
    {
        return $this->belongsTo('App\TipoEquipo','tipoEquipo_id');
    }

    public function modelo()
    {
        return $this->hasMany('App\Modelo');
    }

    public function bascula()
    {
        return $this->hasMany('App\Bascula');
    }

    public static function marca($id)
    {
        return Marca::where('tipoEquipo_id','=',$id)->orderBy('nombre', 'asc')->get();
    }

    public function f4()
    {
        return $this->hasMany('App\F4');
    }
}
