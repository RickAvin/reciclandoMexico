<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mantenimiento extends Model
{
     protected $table ="mantenimiento";
    protected $fillable =['hora','dia','maquina_id','tecnico_id'];
    
    public function maquina(){
        return $this->belongsTo('App\Maquina');
    }
    public function tecnico(){
        return $this->belongsTo('App\Tecnico');
    }

      public function reparacion(){
    	return $this->hasMany('App\Reparacion');
    }
}
