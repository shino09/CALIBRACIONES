<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    protected $table = 'modelos';

    protected $fillable =['nombre','marca_id','tipoEquipo_id'];

    public function marca()
    {
        return $this->belongsTo('App\Marca','marca_id');
    }

    public static function modelo($id)
    {
        return Modelo::where('marca_id','=',$id)->orderBy('nombre', 'asc')->get();
    }

    public function f4()
    {
        return $this->hasMany('App\F4');
    }
}
