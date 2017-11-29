<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unidad extends Model
{
    protected $table = 'unidades';

    protected $fillable =['nombre','tipoEquipo_id'];

    public function tipo_equipo()
    {
        return $this->belongsTo('App\TipoEquipo','tipoEquipo_id');
    }

    public static function unidad($id)
    {
        return Unidad::where('tipoEquipo_id','=',$id)->orderBy('nombre', 'asc')->get();
    }
}
