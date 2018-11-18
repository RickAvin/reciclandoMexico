@extends('admin.template.main')

@section('title','Lista de Tecnicos')

@section('content')
 <a href="{{route('cita.create')}}" class="btn btn-info">Nueva Cita</a>
<table class="table table-striped">
    <thead>
        <th>ID</th>
        <th>FECHA</th>
        <th>TECNICO</th>
        <th>MAQUINA</th>
         <th>ACCION</th>
      
    </thead>
    <tbody>
        @foreach($citas as $cita)
        <tr>
            <td>{{$cita->id}}</td>
            <td>{{$cita->fecha}}</td>
            <td>{{$cita->tecnico->nombre}}</td>
            <td>{{$cita->maquina->nombre}}</td>
            <td><a href="{{route('cita.edit',$cita->id)}}" class="btn btn-success"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
                <a href="{{route('cita.destroy',$cita->id)}}" onclick="return confirm('Seguro que deseas eliminarlo???')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
            </td>
            
        </tr>
        @endforeach
    </tbody>
</table>
{!! $citas->render() !!}

@endsection 