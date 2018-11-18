@extends('admin.template.main')

@section('title','Crear Mantenimiento')

@section('content')
    {!! Form::open(['route' => 'mantenimiento.store','method'=>'POST']) !!}
    <div id="principal">
    <div class="form-group">
        {!! Form::label('hora','Hora')!!}
        {!! Form::time('hora','12:00')!!}        
    </div>
    <br>
    <div class="form-group">
          
        {!! Form::label('dia','Dia')!!}
        {!! Form::date('dia',null) !!}
    </div>
    
    <br>
    <div class="form-group">
        {!! Form::label('maquina_id','Maquina')!!}
        {!! Form::select('maquina_id',$maquina,null,['class'=>'form-control','placeholder'=>'Selecciona una Opcion','required']) !!}        
    </div>
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