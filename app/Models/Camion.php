<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camion extends Model
{
    use HasFactory;
    //relacion de muchos a muchos 
    public function camioneros(){
        return $this->hasMany('App\Models\Camionero');
        return $this->belongsToMany('App\Models\Camion');
    }
    
}
