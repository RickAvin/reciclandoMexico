@extends('admin.template.main')

@section('title','Crear Tecnico')

@section('content')
    {!! Form::open(['route' => 'tecnico.store','method'=>'POST']) !!}
    <div id="principal">
    <div class="form-group">
        {!! Form::label('name','Nombre')!!}
        {!! Form::text('nombre',null,['class'=>'form-control','placeholder' => 'Nombre del Tecnico','required']) !!}        
    </div>
    <br>
    <div class="form-group">
          
        {!! Form::label('fechaNac','Fecha de Nacimiento')!!}
        {!! Form::date('fechaNac',null) !!}
    </div>
    <div class="form-group">
        {!! Form::label('rfc','RFC')!!}
        {!! Form::text('rfc',null,['class'=>'form-control','placeholder' => 'RFC','required']) !!}        
    </div>
    <br>
    <div class="form-group">
        {!! Form::label('empresa_id','Empresa')!!}
        {!! Form::select('empresa_id',$empresa,null,['class'=>'form-control','placeholder'=>'Selecciona una Opcion','required']) !!}        
    </div>
     <div class="form-group">
        {!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!}
    </div>
    <br>
        </div>
    {!! Form::close() !!}
@endsection