@extends('admin.template.main')

@section('title','Crear Cita')

@section('content')
    {!! Form::open(['route' => 'cita.store','method'=>'POST']) !!}
    <div id="principal">
    <div class="form-group">
          
        {!! Form::label('fecha','Fecha')!!}
        {!! Form::date('fecha',null) !!}
    </div>
    <div class="form-group">
        {!! Form::label('maquina_id','Maquina')!!}
        {!! Form::select('maquina_id',$maquina,null,['class'=>'form-control','placeholder'=>'Selecciona una Opcion','required']) !!}        
    </div>
    <br>
    <div class="form-group">
        {!! Form::label('tecnico_id','Tecnico')!!}
        {!! Form::select('tecnico_id',$tecnico,null,['class'=>'form-control','placeholder'=>'Selecciona una Opcion','required']) !!}        
    </div>
     <div class="form-group">
        {!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!}
    </div>
    <br>
        </div>
    {!! Form::close() !!}
@endsection