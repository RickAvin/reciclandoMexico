<?php

namespace App;

use Illuminate\Database\Eloquent\Model;  

class Empresa extends Model
{
    protected $table ="empresa";
    protected $fillable =['nombre','direccion','telefono','cuentaBancaria'];
    
    public function tecnicos()
    {
        return $this->hasMany('App\Tecnico');
    }
}
