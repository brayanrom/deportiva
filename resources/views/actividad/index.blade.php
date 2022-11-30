@extends('actividad.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Deportiva Digital</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('actividad.create') }}"> Crear un Actividad</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
            <th>#</th>
            <th>nombre</th>
            <th>descripcion</th>

            <th width="280px">Accion</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($actividad as $act)
        <tr>
            <td>{{ $act->id }}</td>
            <td>{{ $act->nombre }}</td>
            <td>{{ $act->descripcion }}</td>

            <td>
                <form action="{{ route('actividad.destroy',$act->id) }}" method="POST">    
                    <a class="btn btn-primary" href="{{ route('actividad.edit',$act->id) }}">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
  
    {{-- {!! $actividad->links() !!} --}}
      
@endsection