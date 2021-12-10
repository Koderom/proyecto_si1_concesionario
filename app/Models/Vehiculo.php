<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    public function marca(){
        return $this->belongsTo('App\Models\Marca');
    }
    public function categoria(){
        return $this->belongsTo('App\Models\Categoria');
    }
    public function nota_venta(){
        return $this->hasOne('App\Models\NotaVenta');
    }
}
