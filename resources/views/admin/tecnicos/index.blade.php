@extends('admin.template.main')

@section('title','Lista de Tecnicos')

@section('content')
 <a href="{{route('tecnico.create')}}" class="btn btn-info">Nuevo Tecnico</a>
<table class="table table-striped">
    <thead>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>FECHA DE NACIMIENTO</th>
        <th>RFC</th>
        <th>EMPRESA</th>
         <th>ACCION</th>
      
    </thead>
    <tbody>
        @foreach($tecnicos as $tecnico)
        <tr>
            <td>{{$tecnico->id}}</td>
            <td>{{$tecnico->nombre}}</td>
            <td>{{$tecnico->fechaNac}}</td>
            <td>{{$tecnico->rfc}}</td>
            <td>{{$tecnico->empresa->nombre}}</td>
            <td><a href="{{route('tecnico.edit',$tecnico->id)}}" class="btn btn-success"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
                <a href="{{route('tecnico.destroy',$tecnico->id)}}" onclick="return confirm('Seguro que deseas eliminarlo???')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
            </td>
            
        </tr>
        @endforeach
    </tbody>
</table>
{!! $tecnicos->render() !!}

@endsection 