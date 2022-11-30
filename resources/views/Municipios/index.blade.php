@extends('municipios.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Deportiva Digital</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('municipios.create') }}"> Registra una Municipio</a>
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
            <th>Nombre</th>
            <th>Estado</th>
            <th width="280px">Accion</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($municipios as $municipio)
        <tr>
            <th>{{$municipio->id}}</th>
            <td>{{ $municipio->nombre }}</td>
            <td>{{ $municipio->estado_id }}</td>
            <td>
                <form action="{{ route('municipios.destroy',$municipio->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('municipios.show',$municipio->id) }}">Mostrar</a>
    
                    <a class="btn btn-primary" href="{{ route('municipios.edit',$municipio->id) }}">Editar</a>
   
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