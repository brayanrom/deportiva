@extends('fecha.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Deportiva Digital</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('fecha.create') }}"> Crear un Actividad</a>
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
            <th>Dia</th>
            <th>Hora</th>

            <th width="280px">Accion</th>
        </tr>
        @foreach ($fecha as $act)
        <tr>
            <td>{{ $act->id }}</td>
            <td>{{ $act->dia }}</td>
            <td>{{ $act->hora }}</td>

            <td>
                <form action="{{ route('fecha.destroy',$act->id) }}" method="POST">    
                    <a class="btn btn-primary" href="{{ route('fecha.edit',$act->id) }}">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {{-- {!! $fecha->links() !!} --}}
      
@endsection