<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maquina;
use App\Tecnico;
use App\Mantenimiento;
use Laracasts\Flash\Flash;

class MantenimientosController extends Controller
{
     public function create(){
        $maquina = Maquina::orderBy('nombre','ASC')->pluck('nombre','id');
        $tecnico = Tecnico::orderBy('nombre','ASC')->pluck('nombre','id');
      return view('admin.mantenimientos.create')->with('maquina',$maquina)->with('tecnico',$tecnico);
    }
    
    public function store(Request $request){
        $mantenimiento= new Mantenimiento($request->all());
  
        $mantenimiento->save();
        Flash::success("Se guardo correctamente");
         return redirect()->route('mantenimiento.index');
    }
    
    public function index(){
        $mantenimientos= Mantenimiento::orderBy('id','ASC')->paginate(5);
      
       return view('admin.mantenimientos.index')->with('mantenimientos',$mantenimientos);
       
    }
    
      public function edit($id){
         $mantenimiento=Mantenimiento::find($id);
         $tecnico = Tecnico::orderBy('nombre','ASC')->pluck('nombre','id');
          $maquina = Maquina::orderBy('nombre','ASC')->pluck('nombre','id');
          return view('admin.mantenimientos.edit')->with('mantenimiento',$mantenimiento)->with('maquina',$maquina)->with('tecnico',$tecnico);
      
    }
    public function update(Request $request,$id){
           $mantenimiento=Mantenimiento::find($id);
            $mantenimiento->fill($request->all());
            $mantenimiento->save();
        Flash::success("Se actualizo correctamente");
            return redirect()->route('mantenimiento.index');
            
    }
    
       public function destroy($id){
        $mantenimiento=Mantenimiento::find($id);
        $mantenimiento->delete();
        Flash::error("Se ha eliminado al Tecnico de forma exitosa");
        return redirect()->route('mantenimiento.index');
    }

}
