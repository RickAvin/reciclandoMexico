@extends('admin.template.main')

@section('title','Crear Reparacion')

@section('content')
    {!! Form::open(['route' => ['reparacion.update',$reparacion],'method'=>'PUT']) !!}
    <div id="principal">
    <br>
    <div class="form-group">
        {!! Form::label('pieza_id','Pieza')!!}
        {!! Form::select('pieza_id',$pieza,$reparacion->pieza->id,['class'=>'form-control','placeholder'=>'Selecciona una Opcion','required']) !!}        
    </div>
    <div class="form-group">
        {!! Form::label('mantenimiento_id','Mantenimiento')!!}
        {!! Form::select('mantenimiento_id',$mantenimiento,$reparacion->mantenimiento->id,['class'=>'form-control','placeholder'=>'Selecciona una Opcion','required']) !!}   
                
    </div>
     <div class="form-group">
        {!! Form::submit('Guardar',['class'=>'btn btn-primary']) !!}
    </div>
    <br>
        </div>
    {!! Form::close() !!}
@endsection