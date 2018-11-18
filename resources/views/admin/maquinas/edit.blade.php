@extends('admin.template.main')

@section('title','Actualizar Tecnico')

@section('content')
    {!! Form::open(['route' => ['maquina.update',$maquina],'method'=>'PUT']) !!}
    <div id="principal">
    <div class="form-group">
        {!! Form::label('name','Nombre')!!}
        {!! Form::text('nombre',$maquina->nombre,['class'=>'form-control','placeholder' => 'Nombre del Tecnico','required']) !!}        
    </div>
    <br>
    <div class="form-group">
          
        {!! Form::label('codigo','Codigo')!!}
        {!! Form::text('codigo',$maquina->codigo,['class'=>'form-control','placeholder' => 'Fecha de Nacimiento','required']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('marca','Marca')!!}
        {!! Form::text('marca',$maquina->marca,['class'=>'form-control','placeholder' => 'RFC','required']) !!}        
    </div>
    <br>
    <div class="form-group">
        {!! Form::label('fechaAdq','Fecha de Adquisicion')!!}
        {!! Form::date('fechaAdq',$maquina->fechaAdq) !!}     
    </div>
     <div class="form-group">
        {!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}
    </div>
    <br>
        </div>
    {!! Form::close() !!}
@endsection