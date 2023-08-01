<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camionero extends Model
{
    use HasFactory;
    //relacion de muchos a muchos 
    public function camions(){
        return $this->belongsToMany('App\Models\Camion');
    }

    //relacion 1 a m
    
    public function paquete(){
        return $this->belongsTo('App\Models\Paquete');
    }
}
