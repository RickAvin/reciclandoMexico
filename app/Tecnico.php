<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tecnico extends Model
{
    protected $table ="tecnico";
    protected $fillable =['nombre','fechaNac','rfc','empresa_id'];
    
   
    public function empresa(){
        return $this->belongsTo('App\Empresa');
    }
    
    public function citas(){
        return $this->hasMany('App\Cita');
    }
    public function mantenimientos(){
        return $this->hasMany('App\Mantenimiento');
    }
}
