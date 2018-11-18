@extends('admin.template.main')

@section('title','Lista de Empresas')

@section('content')
 <a href="{{route('maquina.create')}}" class="btn btn-info">Nueva Maquina</a>
<table class="table table-striped">
    <thead>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>CODIGO</th>
        <th>MARCA</th>
        <th>FECHA DE ADQUISICION</th>
        <th>ACCION</th>
      
    </thead>
    <tbody>
        @foreach($maquinas as $maquina)
        <tr>
            <td>{{$maquina->id}}</td>
            <td>{{$maquina->nombre}}</td>
             <td>{{$maquina->codigo}}</td>
            <td>{{$maquina->marca}}</td>
            <td>{{$maquina->fechaAdq}}</td>
            <td><a href="{{route('maquina.edit',$maquina->id)}}" class="btn btn-success"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
                <a href="{{route('maquina.destroy',$maquina->id)}}" onclick="return confirm('Seguro que deseas eliminarlo???')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
            </td>
            
        </tr>
        @endforeach
    </tbody>
</table>
{!! $maquinas->render() !!}

@endsection 