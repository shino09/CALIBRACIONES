<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condicion extends Model
{
    protected $table = 'condiciones';

    protected $fillable =['nombre','tipoEquipo_id'];

    public function tipo_equipo()
    {
        return $this->belongsTo('App\TipoEquipo','tipoEquipo_id');
    }

    public static function condicion($id)
    {
        return Condicion::where('tipoEquipo_id','=',$id)->orderBy('nombre', 'asc')->get();
    }
}
