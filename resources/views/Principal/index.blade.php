@extends('Principal.layout')
 
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
   
    <table class="table table-bordered">
        <tr>
            <th>Nombre</th>
            <th>Actividad</th>
        </tr>
        @foreach ($ResumenPersonaActividades as $resumen)
        <tr>
            <td>{{ $resumen->Nombre }}</td>
            <td>
                <ul>
                    @foreach (explode("/ ",$resumen->Actividad) as $item)
                     <li>{{$item}}</li>
                    @endforeach
                </ul> 
            </td>
        </tr>
        @endforeach

    </table>
  
    {{-- {!! $ResumenPersonaActividades->links() !!} --}}
      
@endsection
