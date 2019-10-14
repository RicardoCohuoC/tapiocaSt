<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table='productos';
    public function catalogos(){
        return $this->belongsToMany('App\Catalogo')->withPivot('Catalogo_producto','id_producto','id_catalogo');
    }
}
