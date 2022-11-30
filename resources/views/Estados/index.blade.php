@extends('estados.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Deportiva Digital</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('estados.create') }}"> Crear un Estado</a>
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
            <th width="280px">Accion</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($estados as $estado)
        <tr>
            <td>{{ $estado->id }}</td>
            <td>{{ $estado->nombre }}</td>
            <td>
                <form action="{{ route('estados.destroy',$estado->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('estados.show',$estado->id) }}">Mostrar</a>
    
                    <a class="btn btn-primary" href="{{ route('estados.edit',$estado->id) }}">Editar</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
  
      
@endsection