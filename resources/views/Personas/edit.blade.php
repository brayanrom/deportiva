@extends('personas.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Persona</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('personas.index') }}">Regresar</a>
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
  
    <form action="{{ route('personas.update',$persona->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="nombre" value="{{ $persona->nombre }}" class="form-control" placeholder="nombre">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Apellido:</strong>
                    <input type="text" name="apellido" value="{{ $persona->apellido }}" class="form-control" placeholder="apellido">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>CURP:</strong>
                    <input type="text" name="curp" value="{{ $persona->curp }}" class="form-control" placeholder="curp">
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Localidad:</strong>
                    {{-- <input type="text" name="localidad_id" value="{{ $persona->localidad_id }}" class="form-control" placeholder="localidad_id"> --}}                    
                    <select name="localidad_id" class="form-select" aria-label="Default select example">
                        @foreach ($localidades as $localidad)
                        <option 
                        @selected($localidad->id==$persona->localidad_id)
                        value="{{$localidad->id}}">{{$localidad->tipo}}</option>
                        @endforeach 
                    </select>   
                
                
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Editar Persona</button>
            </div>
        </div>
   
    </form>
@endsection