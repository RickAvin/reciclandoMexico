@extends('admin.template.main')

@section('title','Crear Reparacion')

@section('content')
    {!! Form::open(['route' => 'reparacion.store','method'=>'POST']) !!}
    <div id="principal">
    <br>
    <div class="form-group">
        {!! Form::label('pieza_id','Pieza')!!}
        {!! Form::select('pieza_id',$pieza,null,['class'=>'form-control','placeholder'=>'Selecciona una Opcion','required']) !!}        
    </div>
    <div class="form-group">
        {!! Form::label('mantenimiento_id','Mantenimiento')!!}
        {!! Form::select('mantenimiento_id',$mantenimiento,null,['class'=>'form-control','placeholder'=>'Selecciona una Opcion','required']) !!}        
    </div>
     <div class="form-group">
        {!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!}
    </div>
    <br>
        </div>
    {!! Form::close() !!}
@endsection