@extends('admin.template.main')

@section('title','Crear Pieza')

@section('content')
    {!! Form::open(['route' => 'pieza.store','method'=>'POST']) !!}
    <div id="principal">
    <div class="form-group">
        {!! Form::label('name','Nombre')!!}
        {!! Form::text('nombre',null,['class'=>'form-control','placeholder' => 'Nombre de la Empresa','required']) !!}        
    </div>
    <br>
    <div class="form-group">
          
        {!! Form::label('codigo','Codigo')!!}
        {!! Form::text('codigo',null,['class'=>'form-control','placeholder' => '55555','required']) !!}
    </div>
 
     <div class="form-group">
        {!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!}
    </div>
    <br>
        </div>
    {!! Form::close() !!}
@endsection