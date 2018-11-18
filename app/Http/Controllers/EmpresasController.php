<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use Laracasts\Flash\Flash;

class EmpresasController extends Controller
{
    public function create(){
        return view('admin.empresas.create');
    }
    
    public function store(Request $request){
        $empresa= new Empresa($request->all());
        $empresa->save();
        Flash::success("Se g.uardo correctamente");
        return redirect()->route('empresa.index');

    }
    public function index(){
        $empresa= Empresa::orderBy('id','ASC')->paginate(5);
        return view ('admin.empresas.index')->with('empresas',$empresa);
    }
    public function destroy($id){
        $empresa=Empresa::find($id);
        $empresa->delete();
        Flash::error("Se ha borrado la empresa");
        return redirect()->route('empresa.index');
    }
    
    public function edit($id){
      
         $empresa=Empresa::find($id);
       
       return view('admin.empresas.edit')->with('empresas',$empresa);
    }
    public function update(Request $request,$id){
        $empresa=Empresa::find($id);
        $empresa->nombre=$request->nombre;
        $empresa->direccion=$request->direccion;
        $empresa->telefono=$request->telefono;
        $empresa->cuentaBancaria=$request->cuentaBancaria;
        $empresa->save();
        Flash::warning("Se ha editado correctamente la empresa");
        return redirect()->route('empresa.index');
    }
}
