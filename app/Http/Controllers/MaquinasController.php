<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maquina;
use Laracasts\Flash\Flash;

class MaquinasController extends Controller
{
    public function create(){
      return view('admin.maquinas.create');
    }
    
    public function store(Request $request){
        $maquina= new Maquina($request->all());
   
        $maquina->save();
        Flash::success("Se guardo correctamente");
         return redirect()->route('maquina.index');
    }
    
     public function index(){
        $maquina= Maquina::orderBy('id','ASC')->paginate(5);
       return view('admin.maquinas.index')->with('maquinas',$maquina);
       
    }
    
    public function destroy($id){
        $maquina=Maquina::find($id);
        $maquina->delete();
        Flash::error("Se ha borrado correctamente");
        return redirect()->route('maquina.index');
    }
    
    public function edit($id){
      
         $maquina=Maquina::find($id);
       
       return view('admin.maquinas.edit')->with('maquina',$maquina);
    }
    public function update(Request $request,$id){
        $maquina=Maquina::find($id);
        $maquina->fill($request->all());
        $maquina->save();
        Flash::warning("Se ha editado actualizado correctamente");
        return redirect()->route('maquina.index');
    }
}
