@extends('admin.template.main')

@section('title','Editar '.$piezas->nombre)

@section('content')
    {!! Form::open(['route' => ['pieza.update',$piezas],'method'=>'PUT']) !!}
  
    <div class="form-group">
        {!! Form::label('name','Nombre')!!}
        {!! Form::text('nombre',$piezas->nombre,['class'=>'form-control','placeholder' => 'Nombre de la Empresa','required']) !!}        
    </div>
    <br>
    <div class="form-group">
          
        {!! Form::label('codigo','Codigo')!!}
        {!! Form::text('codigo',$piezas->codigo,['class'=>'form-control','placeholder' => 'Direccion','required']) !!}
    </div>
     <div class="form-group">
        {!! Form::submit('Editar',['class'=>'btn btn-primary']) !!}
    </div>
    <br>
    {!! Form::close() !!}
@endsection