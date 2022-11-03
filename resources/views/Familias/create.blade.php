@extends('familias.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Registrar nueva Familia</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('familias.index') }}">Regresar</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Existen algunos problemas al ingresar esos parametros.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('familias.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Folio:</strong>
                <input type="text" name="folio" class="form-control" placeholder="Folio">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>persona:</strong>
                {{-- <input type="text" name="persona_id" class="form-control" placeholder="persona_id"> --}}

                <select name="persona_id" class="form-select" aria-label="Default select example">
                    <option selected></option>    
                    @foreach ($personas as $persona)
                    <option value="{{$persona->id}}">{{$persona->nombre}}</option>
                    @endforeach 
                </select>   



            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    </div>
</form>
@endsection