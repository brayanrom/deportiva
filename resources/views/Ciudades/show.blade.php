@extends('ciudades.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Listado de ciudades</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('ciudades.index') }}">Regresar</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                {{ $ciudad->nombre }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>estado_id:</strong>
                {{ $ciudad }}
            </div>
        </div>




    </div>
@endsection