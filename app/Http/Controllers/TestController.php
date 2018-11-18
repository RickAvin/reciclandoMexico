<?php

namespace App\Http\Controllers;

use Iluminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tecnico;

class TestController extends Controller
{
    public function view($id){
        $tecnico= Tecnico::find($id);
      
        return view('test.index',['prueba'=>$tecnico]);
    }
}
