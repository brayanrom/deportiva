@extends('fecha.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Actividad</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('fecha.index') }}">Regresar</a>
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
  
    <form action="{{ route('fecha.update',$fecha->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Dia:</strong>
                    <input type="text" name="dia" value="{{ $fecha->dia }}" class="form-control" placeholder="Dia">
                </div>
                <div class="form-group">
                    <strong>Hora:</strong>
                    <input type="text" name="hora" value="{{ $fecha->hora }}" class="form-control" placeholder="Hora">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Editar Actividad</button>
            </div>
        </div>
   
    </form>
@endsection