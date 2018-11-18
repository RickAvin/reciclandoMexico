@extends('admin.template.main')

@section('title','Lista de Piezas')

@section('content')
 <a href="{{route('pieza.create')}}" class="btn btn-info">Nueva Pieza</a>
<table class="table table-striped">
    <thead>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>CODIGO</th>
         <th>ACCION</th>
      
    </thead>
    <tbody>
        @foreach($piezas as $pieza)
        <tr>
            <td>{{$pieza->id}}</td>
            <td>{{$pieza->nombre}}</td>
             <td>{{$pieza->codigo}}</td>
            <td><a href="{{route('pieza.edit',$pieza->id)}}" class="btn btn-success"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
                <a href="{{route('pieza.destroy',$pieza->id)}}" onclick="return confirm('Seguro que deseas eliminarlo???')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
            </td>
            
        </tr>
        @endforeach
    </tbody>
</table>
{!! $piezas->render() !!}

@endsection 