<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalogo extends Model
{
    protected $table='catalogos';
  public function productos(){
       return $this->belongsToMany('App\Producto')->withPivot('Catalogo_producto','id_producto','id_catalogo');
    }
    
}

