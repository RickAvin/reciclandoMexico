@extends('admin.template.main')

@section('title','Actualizar Tecnico')

@section('content')
    {!! Form::open(['route' => ['tecnico.update',$tecnico],'method'=>'PUT']) !!}
    <div id="principal">
    <div class="form-group">
        {!! Form::label('name','Nombre')!!}
        {!! Form::text('nombre',$tecnico->nombre,['class'=>'form-control','placeholder' => 'Nombre del Tecnico','required']) !!}        
    </div>
    <br>
    <div class="form-group">
          
        {!! Form::label('fechaNac','Fecha de Nacimiento')!!}
        {!! Form::date('fechaNac',$tecnico->fechaNac) !!}
    </div>
    <div class="form-group">
        {!! Form::label('rfc','RFC')!!}
        {!! Form::text('rfc',$tecnico->rfc,['class'=>'form-control','placeholder' => 'RFC','required']) !!}        
    </div>
    <br>
    <div class="form-group">
        {!! Form::label('empresa_id','Empresa')!!}
        {!! Form::select('empresa_id',$empresa,$tecnico->empresa->id,['class'=>'form-control','placeholder'=>'Selecciona una Opcion','required']) !!}        
    </div>
     <div class="form-group">
        {!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}
    </div>
    <br>
        </div>
    {!! Form::close() !!}
@endsection