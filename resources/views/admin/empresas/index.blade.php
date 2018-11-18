@extends('admin.template.main')

@section('title','Lista de Empresas')

@section('content')
 <a href="{{route('empresa.create')}}" class="btn btn-info">Nueva Empresa</a>
<table class="table table-striped">
    <thead>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>DIRECCION</th>
        <th>TELEFONO</th>
        <th>CUENTA BANCARIA</th>
         <th>ACCION</th>
      
    </thead>
    <tbody>
        @foreach($empresas as $empresa)
        <tr>
            <td>{{$empresa->id}}</td>
            <td>{{$empresa->nombre}}</td>
             <td>{{$empresa->direccion}}</td>
            <td>{{$empresa->telefono}}</td>
            <td>{{$empresa->cuentaBancaria}}</td>
            <td><a href="{{route('empresa.edit',$empresa->id)}}" class="btn btn-success"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
                <a href="{{route('empresa.destroy',$empresa->id)}}" onclick="return confirm('Seguro que deseas eliminarlo???')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
            </td>
            
        </tr>
        @endforeach
    </tbody>
</table>
{!! $empresas->render() !!}

@endsection 