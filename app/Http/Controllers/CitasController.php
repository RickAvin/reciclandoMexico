<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maquina;
use App\Tecnico;
use App\Cita; 
use Laracasts\Flash\Flash;

class CitasController extends Controller
{
     public function create(){
        $maquina = Maquina::orderBy('nombre','ASC')->pluck('nombre','id');
   		$tecnico = Tecnico::orderBy('nombre','ASC')->pluck('nombre','id');
      return view('admin.citas.create')->with('maquina',$maquina)->with('tecnico',$tecnico);
    }
    
    public function store(Request $request){
        $cita= new Cita($request->all());
   
        $cita->save();
        Flash::success("Se guardo correctamente");
         return redirect()->route('cita.index');
    }
    
    public function index(){
        $cita= Cita::orderBy('id','ASC')->paginate(5);
       return view('admin.citas.index')->with('citas',$cita);
       
    }
    
      public function edit($id){
          $cita=Cita::find($id);
	      $maquina = Maquina::orderBy('nombre','ASC')->pluck('nombre','id');
	   	  $tecnico = Tecnico::orderBy('nombre','ASC')->pluck('nombre','id');
          return view('admin.citas.edit')->with('maquina',$maquina)->with('tecnico',$tecnico)->with('cita',$cita);
      
    }
    public function update(Request $request,$id){
           $cita=Cita::find($id);
        //fill sirve para guardar los datos
            $cita->fill($request->all());
            $cita->save();
        Flash::success("Se actualizo correctamente");
            return redirect()->route('cita.index');
            
    }
    
       public function destroy($id){
        $cita=Cita::find($id);
        $cita->delete();
        Flash::error("Se ha eliminado al Tecnico de forma exitosa");
        return redirect()->route('cita.index');
    }
}
