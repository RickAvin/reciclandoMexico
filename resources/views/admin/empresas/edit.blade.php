@extends('admin.template.main')

@section('title','Editar '.$empresas->nombre)

@section('content')
    {!! Form::open(['route' => ['empresa.update',$empresas],'method'=>'PUT']) !!}
  
    <div class="form-group">
        {!! Form::label('name','Nombre')!!}
        {!! Form::text('nombre',$empresas->nombre,['class'=>'form-control','placeholder' => 'Nombre de la Empresa','required']) !!}        
    </div>
    <br>
    <div class="form-group">
          
        {!! Form::label('direccion','Direccion')!!}
        {!! Form::text('direccion',$empresas->direccion,['class'=>'form-control','placeholder' => 'Direccion','required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('telefono','Telefono')!!}
        {!! Form::text('telefono',$empresas->telefono,['class'=>'form-control','placeholder' => '5555555','required']) !!}        
    </div>
    <br>
    <div class="form-group">
        {!! Form::label('cuenta','Cuenta Bancaria')!!}
        {!! Form::text('cuentaBancaria',$empresas->cuentaBancaria,['class'=>'form-control','placeholder' => '5555555','required']) !!}        
    </div>
     <div class="form-group">
        {!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}
    </div>
    <br>
    {!! Form::close() !!}
@endsection