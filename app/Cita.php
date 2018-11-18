<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model
{
     protected $table ="cita";
    protected $fillable =['fecha','maquina_id','tecnico_id'];
    
    public function tecnico(){
        return $this->belongsTo('App\Tecnico');
    }
    public function maquina(){
        return $this->belongsTo('App\Maquina');
    }
    
}
