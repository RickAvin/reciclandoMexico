@extends('admin.template.main')

@section('title','Actualizar Mantenimiento')

@section('content')
    {!! Form::open(['route' => ['mantenimiento.update',$mantenimiento],'method'=>'PUT']) !!}
    <div id="principal">
    <div class="form-group">
        {!! Form::label('hora','Hora')!!}
        {!! Form::time('hora',$mantenimiento->hora)!!}        
    </div>
    <br>
    <div class="form-group">
          
        {!! Form::label('dia','Dia')!!}
        {!! Form::date('dia',$mantenimiento->dia) !!}
    </div>
    <br>
    <div class="form-group">
        {!! Form::label('maquina_id','Empresa')!!}
        {!! Form::select('maquina_id',$maquina,$mantenimiento->maquina->id,['class'=>'form-control','placeholder'=>'Selecciona una Opcion','required']) !!}        
    </div>
    <div class="form-group">
        {!! Form::label('tecnico_id','Tecnico')!!}
        {!! Form::select('tecnico_id',$tecnico,$mantenimiento->tecnico->id,['class'=>'form-control','placeholder'=>'Selecciona una Opcion','required']) !!}        
    </div>
     <div class="form-group">
        {!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}
    </div>
    <br>
        </div>
    {!! Form::close() !!}
@endsection