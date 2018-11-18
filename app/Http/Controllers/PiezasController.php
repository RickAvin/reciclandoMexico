<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pieza;
use Laracasts\Flash\Flash;

class PiezasController extends Controller
{
      public function create(){
        return view('admin.piezas.create');
    }
    
    public function store(Request $request){
        $pieza= new Pieza($request->all());
        $pieza->save();
        Flash::success("Se guardo correctamente");
        return redirect()->route('pieza.index');

    }
    public function index(){
        $pieza= Pieza::orderBy('id','ASC')->paginate(5);
        return view ('admin.piezas.index')->with('piezas',$pieza);
    }
    public function destroy($id){
        $pieza=Pieza::find($id);
        $pieza->delete();
        Flash::error("Se ha borrado la pieza");
        return redirect()->route('pieza.index');
    }
    
    public function edit($id){
      
         $pieza=Pieza::find($id);
       
       return view('admin.piezas.edit')->with('piezas',$pieza);
    }
    public function update(Request $request,$id){
        $pieza=Pieza::find($id);
        $pieza->fill($request->all());
        $pieza->save();
        Flash::warning("Se ha editado correctamente la pieza");
        return redirect()->route('pieza.index');
    }
}
