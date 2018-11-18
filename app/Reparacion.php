<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reparacion extends Model
{
     protected $table ="reparacion";
    protected $fillable =['mantenimiento_id','pieza_id'];
    
    public function pieza(){
        return $this->belongsTo('App\Pieza');
    }

    public function mantenimiento(){
    	return $this->belongsTo('App\Mantenimiento');
    }
}
