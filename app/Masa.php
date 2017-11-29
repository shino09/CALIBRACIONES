<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masa extends Model
{
    protected $table = 'masas';

    protected $primaryKey = 'idMasa';

    protected $fillable = ['cantidad'];

    public function tipo_equipo()
    {
        return $this->belongsTo('App\TipoEquipo');
    }

    public function f37()
    {
        return $this->belongsTo('App\F37','f37_id');
    }

    public function marca()
    {
        return $this->belongsTo('App\Marca','marca_id');
    }

    public function material()
    {
        return $this->belongsTo('App\Material','material_id');
    }

    public function condicion()
    {
        return $this->belongsTo('App\Condicion','condicion_id');
    }
}
