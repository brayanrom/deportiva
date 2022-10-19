@extends('ciudades.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Ciudad</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('ciudades.index') }}">Regresar</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Tienes algunos problemas con el texto ingresado.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('ciudades.update',$ciudad->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="nombre" value="{{ $ciudad->nombre }}" class="form-control" placeholder="nombre">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>estado_id:</strong>
                    <input type="text" name="estado_id" value="{{ $ciudad->estado_id }}" class="form-control" placeholder="estado_id">
                </div>
            </div>



            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Editar Ciudad</button>
            </div>
        </div>
   
    </form>
@endsection