<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pieza extends Model
{
    protected $table ="pieza";
    protected $fillable =['nombre','codigo'];
    
    public function repaciones(){
        return $this->hasMany('App\Reparacion');
    }
}
