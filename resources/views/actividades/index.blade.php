@extends('actividades.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Deportiva Digital</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('actividades.create') }}"> Crear un Actividad</a>
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
            <th>nombre</th>
            <th>descripcion</th>

            <th width="280px">Accion</th>
        </tr>
        @foreach ($actividades as $actividad)
        <tr>
            <td>{{ $actividad->id }}</td>
            <td>{{ $actividad->nombre }}</td>
            <td>{{ $actividad->descripcion }}</td>

            <td>
                <form action="{{ route('actividades.destroy',$actividad->id) }}" method="POST">    
                    <a class="btn btn-primary" href="{{ route('actividades.edit',$actividad->id) }}">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {{-- {!! $actividades->links() !!} --}}
      
@endsection