@extends('admin.template.main')

@section('title','Lista de Mantenimientos')

@section('content')
 <a href="{{route('mantenimiento.create')}}" class="btn btn-info">Nuevo Mantenimiento</a>
<table class="table table-striped">
    <thead>
        <th>ID</th>
        <th>HORA</th>
        <th>FECHA</th>
        <th>MAQUINA</th>
        <th>TECNICOS</th>
         <th>ACCION</th>
      
    </thead>
    <tbody>
        @foreach($mantenimientos as $mantenimiento)
        <tr>
            <td>{{$mantenimiento->id}}</td>
            <td>{{$mantenimiento->hora}}</td>
            <td>{{$mantenimiento->dia}}</td>
            <td>{{$mantenimiento->maquina->nombre}}</td>
            <td>{{$mantenimiento->tecnico->nombre}}</td>
            <td><a href="{{route('mantenimiento.edit',$mantenimiento->id)}}" class="btn btn-success"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
                <a href="{{route('mantenimiento.destroy',$mantenimiento->id)}}" onclick="return confirm('Seguro que deseas eliminarlo???')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
            </td>
            
        </tr>
        @endforeach
    </tbody>
</table>
{!! $mantenimientos->render() !!}

@endsection 