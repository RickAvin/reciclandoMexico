@extends('admin.template.main')

@section('title','Crear Maquina')

@section('content')
    {!! Form::open(['route' => 'maquina.store','method'=>'POST']) !!}
    <div id="principal">
    <div class="form-group">
        {!! Form::label('name','Nombre')!!}
        {!! Form::text('nombre',null,['class'=>'form-control','placeholder' => 'Nombre','required']) !!}        
    </div>
    <br>
    <div class="form-group">
          
        {!! Form::label('codigo','Codigo')!!}
        {!! Form::text('codigo',null,['class'=>'form-control','placeholder' => 'Codigo','required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('marca','Marca')!!}
        {!! Form::text('marca',null,['class'=>'form-control','placeholder' => 'Marca','required']) !!}        
    </div>
    <br>
    <div class="form-group">
        {!! Form::label('fechaAdq','Fecha de Adquisicion')!!}
        {!! Form::date('fechaAdq',null) !!}     
    </div>
     <div class="form-group">
        {!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!}
    </div>
    <br>
        </div>
    {!! Form::close() !!}
@endsection