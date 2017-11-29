<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $table = 'materiales';

    protected $fillable = ['nombre','tipoEquipo_id'];

    public function tipo_equipo()
    {
        return $this->belongsTo('App\TipoEquipo','tipoEquipo_id');
    }

    public static function material($id)
    {
        return Material::where('tipoEquipo_id','=',$id)->orderBy('nombre', 'asc')->get();
    }
}
