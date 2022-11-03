@extends('familias.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Listado de familias</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('familias.index') }}">Regresar</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Folio:</strong>
                {{ $familia->folio }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Integrante:</strong>
                {{-- {{ $familia->persona_id }} --}}

                @foreach ($personas as $persona)
                    @if ($familia->persona_id==$persona->id)
                        {{$persona->nombre}}
                        {{$persona->apellido}}
                    @endif 
                @endforeach 




            </div>
        </div>
    </div>
@endsection