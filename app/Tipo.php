<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $table = 'tipos';

    protected $fillable =['nombre','tipoEquipo_id'];

    public function tipo_equipo()
    {
        return $this->belongsTo('App\TipoEquipo','tipoEquipo_id');
    }

    public static function tipo($id)
    {
        return Tipo::where('tipoEquipo_id','=',$id)->orderBy('nombre', 'asc')->get();
    }
}
