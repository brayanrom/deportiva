@extends('tipospagos.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Deportiva Digital</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('tipospagos.create') }}"> Crear un tipo de pago</a>
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
            <th>Costo</th>

            <th width="280px">Accion</th>
        </tr>
        @foreach ($tipospagos as $tipospago)
        <tr>
            <td>{{ $tipospago->id }}</td>
            <td>{{ $tipospago->nombre }}</td>
            <td>${{ $tipospago->costo }}</td>


            <td>
                <form action="{{ route('tipospagos.destroy',$tipospago->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('tipospagos.show',$tipospago->id) }}">Mostrar</a>
    
                    <a class="btn btn-primary" href="{{ route('tipospagos.edit',$tipospago->id) }}">Editar</a>
   
                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {{-- {!! $tipospagos->links() !!} --}}
      
@endsection