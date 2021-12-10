<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotaVenta extends Model
{
    use HasFactory;
    public function vehiculo(){
        return $this->belongsTo('App\Models\Vehiculo');
    }
    public function venta(){
        return $this->belongsTo('App\Models\Venta');
    }
}
