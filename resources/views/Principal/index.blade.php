@extends('principal.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Deportiva Digital</h2>
            </div>
            <div class="pull-right">
                {{-- <a class="btn btn-success" href="{{ route('personas.create') }}"> Registra una Persona</a> --}}
            </div>
        </div>
    </div>
   
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
  <div class="row">
    @include('Modulos.moduloActividad')
    @include('Modulos.moduloFecha')
  </div>

  
  
  
  
    {{-- {!! $ResumenPersonaActividades->links() !!} --}}
      
@endsection