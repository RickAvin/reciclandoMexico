<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maquina extends Model
{
     protected $table ="maquina";
    protected $fillable =['nombre','codigo','marca','fechaAdq'];
    
    public function mantenimientos(){
        return $this->hasMany('App\Mantenimiento');
    }
    public function citas(){
        return $this->hasMany('App\Cita');
    }
}
