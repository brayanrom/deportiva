@extends('personas.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Deportiva Digital</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('personas.create') }}"> Registra una Persona</a>
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
            <th>Nombre</th>
            <th>Apellido</th>
            <th width="280px">Accion</th>
        </tr>
        @foreach ($personas as $persona)
        <tr>
            <td>{{ $persona->id }}</td>
            <td>{{ $persona->nombre }}</td>
            <td>{{ $persona->apellido }}</td>
            <td>
                <form action="{{ route('personas.destroy',$persona->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('personas.show',$persona->id) }}">Mostrar</a>
    
                    <a class="btn btn-primary" href="{{ route('personas.edit',$persona->id) }}">Editar</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $personas->links() !!}
      
@endsection