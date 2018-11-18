@extends('admin.template.main')

@section('title','Lista de Reparaciones')

@section('content')
 <a href="{{route('reparacion.create')}}" class="btn btn-info">Nueva Reparacion</a>
<table class="table table-striped">
    <thead>
        <th>ID</th>
        <th>HORA</th>
        <th>FECHA</th>
        <th>PIEZA</th>
         <th>ACCION</th>
      
    </thead>
    <tbody>
        @foreach($reparaciones as $reparacion)
        <tr>
            <td>{{$reparacion->id}}</td>
            <td>{{$reparacion->mantenimiento->hora}}</td>
            <td>{{$reparacion->mantenimiento->dia}}</td>
            <td>{{$reparacion->pieza->nombre}}</td>
            <td><a href="{{route('reparacion.edit',$reparacion->id)}}" class="btn btn-success"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
                <a href="{{route('reparacion.destroy',$reparacion->id)}}" onclick="return confirm('Seguro que deseas eliminarlo???')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
            </td>
            
        </tr>
        @endforeach
    </tbody>
</table>
{!! $reparaciones->render() !!}

@endsection 