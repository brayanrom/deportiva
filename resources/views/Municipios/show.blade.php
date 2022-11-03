@extends('municipios.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Listado de municipios</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('municipios.index') }}">Regresar</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>nombre:</strong>
                {{ $municipio->nombre }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Estado:</strong>
                {{ $municipio->estado_id }}
            </div>
        </div>
    </div>
@endsection