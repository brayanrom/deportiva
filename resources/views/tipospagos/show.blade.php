@extends('tipospagos.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Listado de TiposPagos</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('tipospagos.index') }}">Regresar</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                {{ $tipospago->nombre }}
            </div>
            <div class="form-group">
                <strong>Costo:</strong>
                {{ $tipospago->costo }}
            </div>
        </div>
    </div>
@endsection