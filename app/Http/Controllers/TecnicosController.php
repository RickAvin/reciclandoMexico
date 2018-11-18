<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\Tecnico; 
use App\Mantenimiento; 
use Laracasts\Flash\Flash;

class TecnicosController extends Controller
{
    public function create(){
        $empresa = Empresa::orderBy('nombre','ASC')->pluck('nombre','id');

      return view('admin.tecnicos.create')->with('empresa',$empresa);
    }
    
    public function store(Request $request){
        $tecnico= new Tecnico($request->all());
   
        $tecnico->save();
        Flash::success("Se guardo correctamente");
         return redirect()->route('tecnico.index');
    }
    
    public function index(){
        $tecnico= Tecnico::orderBy('id','ASC')->paginate(5);
       return view('admin.tecnicos.index')->with('tecnicos',$tecnico);
       
    }
    
      public function edit($id){
          $tecnico=Tecnico::find($id);
          $empresa = Empresa::orderBy('nombre','ASC')->pluck('nombre','id');
          return view('admin.tecnicos.edit')->with('empresa',$empresa)->with('tecnico',$tecnico);
      
    }
    public function update(Request $request,$id){
           $tecnico=Tecnico::find($id);
        //fill sirve para guardar los datos
            $tecnico->fill($request->all());
            $tecnico->save();
        Flash::success("Se actualizo correctamente");
            return redirect()->route('tecnico.index');
            
    }
    
       public function destroy($id){
        $tecnico=Tecnico::find($id);
        $tecnico->delete();
        Flash::error("Se ha eliminado al Tecnico de forma exitosa");
        return redirect()->route('tecnico.index');
    }

}
