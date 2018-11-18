@extends('admin.template.main')

@section('title','Crear Empresa')

@section('content')
    {!! Form::open(['route' => 'empresa.store','method'=>'POST']) !!}
    <div id="principal">
    <div class="form-group">
        {!! Form::label('name','Nombre')!!}
        {!! Form::text('nombre',null,['class'=>'form-control','placeholder' => 'Nombre de la Empresa','required']) !!}        
    </div>
    <br>
    <div class="form-group">
          
        {!! Form::label('direccion','Direccion')!!}
        {!! Form::text('direccion',null,['class'=>'form-control','placeholder' => 'Direccion','required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('telefono','Telefono')!!}
        {!! Form::text('telefono',null,['class'=>'form-control','placeholder' => '5555555','required']) !!}        
    </div>
    <br>
    <div class="form-group">
        {!! Form::label('cuenta','Cuenta Bancaria')!!}
        {!! Form::text('cuentaBancaria',null,['class'=>'form-control','placeholder' => '5555555','required']) !!}        
    </div>
     <div class="form-group">
        {!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!}
    </div>
    <br>
        </div>
    {!! Form::close() !!}
@endsection