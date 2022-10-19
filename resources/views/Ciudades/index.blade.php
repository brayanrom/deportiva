@extends('ciudades.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Deportiva Digital</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('ciudades.create') }}"> Registra una Ciudad</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Ciudad</th>
            <th>Estado</th>
            <th width="280px">Accion</th>
        </tr>
        @foreach ($ciudades as $ciudad)
        <tr>
            <td>{{ $ciudad->id }}</td>
            <td>{{ $ciudad->nombre }}</td>
            <td>{{ $ciudad->estado_id }}</td>
            <td>
                <form action="{{ route('ciudades.destroy',$ciudad->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('ciudades.show',$ciudad->id) }}">Mostrar</a>
    
                    <a class="btn btn-primary" href="{{ route('ciudades.edit',$ciudad->id) }}">Editar</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $ciudades->links() !!}
      
@endsection