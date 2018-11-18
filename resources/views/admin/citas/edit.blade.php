@extends('admin.template.main')

@section('title','Actualizar Cita')

@section('content')
    {!! Form::open(['route' => ['cita.update',$cita],'method'=>'PUT']) !!}
    <div id="principal">
    <div class="form-group">
          
        {!! Form::label('fecha','Fecha')!!}
        {!! Form::date('fecha',$cita->fecha) !!}
    </div>
     <div class="form-group">
        {!! Form::label('tecnico-_id','Tecnico')!!}
        {!! Form::select('tecnico_id',$tecnico,$cita->tecnico->id,['class'=>'form-control','placeholder'=>'Selecciona una Opcion','required']) !!}        
    </div>
    <br>
    <div class="form-group">
        {!! Form::label('maquina','Maquina')!!}
        {!! Form::select('maquina_id',$maquina,$cita->maquina->id,['class'=>'form-control','placeholder'=>'Selecciona una Opcion','required']) !!}        
    </div>
     <div class="form-group">
        {!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}
    </div>
    <br>
        </div>
    {!! Form::close() !!}
@endsection