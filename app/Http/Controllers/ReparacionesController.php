<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mantenimiento;
use App\Pieza;
use App\Reparacion;
use Laracasts\Flash\Flash;

class ReparacionesController extends Controller
{
    public function create(){
        $pieza = Pieza::orderBy('nombre','ASC')->pluck('nombre','id');
        $mantenimiento = Mantenimiento::orderBy('hora','ASC')->pluck('hora','id');
   
      return view('admin.reparaciones.create')->with('pieza',$pieza)->with('mantenimiento',$mantenimiento);
    }
    
    public function store(Request $request){
        $reparacion= new Reparacion($request->all());
        
        $reparacion->save();
        Flash::success("Se guardo correctamente");
         return redirect()->route('reparacion.index');
    }
    
    public function index(){
        $reparacion= Reparacion::orderBy('id','ASC')->paginate(5);
        
       return view('admin.reparaciones.index')->with('reparaciones',$reparacion);
       
    }
    
      public function edit($id){
          $reparacion=Reparacion::find($id);
          $pieza = Pieza::orderBy('nombre','ASC')->pluck('nombre','id');
          $mantenimiento = Mantenimiento::orderBy('nombre','ASC')->pluck('hora','id');
          return view('admin.reparaciones.edit')->with('mantenimiento',$mantenimiento)->with('pieza',$pieza)->with('reparacion',$reparacion);
      
    }
    public function update(Request $request,$id){
           $reparacion=Reparacion::find($id);
        //fill sirve para guardar los datos
            $reparacion->fill($request->all());
            $reparacion->save();
        Flash::success("Se actualizo correctamente");
            return redirect()->route('reparacion.index');
            
    }
    
       public function destroy($id){
        $reparacion=Reparacion::find($id);
        $reparacion->delete();
        Flash::error("Se ha eliminado al Tecnico de forma exitosa");
        return redirect()->route('reparacion.index');
    }
}
