@extends('municipios.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Editar Municipio</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('municipios.index') }}">Regresar</a>
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
  
    <form action="{{ route('municipios.update',$municipio->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nombre:</strong>
                    <input type="text" name="nombre" value="{{ $municipio->nombre }}" class="form-control" placeholder="Nombre">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Estado:</strong>
                    {{-- <input type="text" name="estado_id" value="{{ $municipio->estado_id }}" class="form-control" placeholder="estado_id"> --}}                
                    <select name="estado_id" class="form-select" aria-label="Default select example">
                        @foreach ($Estados as $Estado)
                        <option 
                        @selected($Estado->id==$municipio->estado_id)
                        value="{{$Estado->id}}">{{$Estado->nombre}}</option>
                        @endforeach 
                    </select>   

                    
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Editar Municipio</button>
            </div>
        </div>
    </form>
@endsection