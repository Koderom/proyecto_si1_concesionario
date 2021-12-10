<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;
    public function usuario(){
        return $this->belongsTo('App\Models\Usuario');
    }
    public function cliente(){
        return $this->belongsTo('App\Models\Cliente');
    }
    public function nota_ventas(){
        return $this->hasMany('App\Models\NotaVenta');
    }
}
