<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paquete extends Model
{
    use HasFactory;
    //relacion 1 a  m
   

    public function camionero(){
        return $this->hasMany('App\Models\Camionero');
    }

    public function provincia(){
        return $this->belongsToMany('App\Models\Provincia');
    }

    
   
   
}
