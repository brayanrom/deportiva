@extends('familias.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Familia</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('familias.index') }}">Regresar</a>
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
  
    <form action="{{ route('familias.update',$familia->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Folio:</strong>
                    <input type="text" name="folio" value="{{ $familia->folio }}" class="form-control" placeholder="folio">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>persona_id:</strong>
                    <input type="text" name="persona_id" value="{{ $familia->persona_id }}" class="form-control" placeholder="persona_id">

                    {{-- <select name="persona_id" class="form-select" aria-label="Default select example">
                        @foreach ($personas as $persona)
                        <option 
                        @selected($persona->id==$municipio->persona_id)
                        value="{{$persona->id}}">{{$persona->nombre}}</option>
                        @endforeach 
                    </select>   --}}
                
                
                
                </div>
            </div>




            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Editar Familia</button>
            </div>
        </div>
   
    </form>
@endsection