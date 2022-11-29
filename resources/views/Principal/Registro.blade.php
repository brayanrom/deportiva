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
{{-- <form action="{{ route('personas.store') }}" method="POST"> --}}
<form action="" method="POST">
@csrf

<div class="col-xs-12 col-sm-12 col-md-12">
    <div class="form-group">
        <strong>Tipo de paquete:</strong>

        <select name="tipo_pago" class="form-select" aria-label="Default select example">
            <option selected></option>    
            @foreach ($TipoPagos as $TipoPago)
            <option value="{{$TipoPago->id}}"><strong> Costo:{{$TipoPago->costo}}</strong>
                <br>Tipo Mensualidad: {{$TipoPago->nombre}}</option>
            @endforeach 
        </select>
    </div>
</div>



 <div class="row">
    <h3>Familiar 1</h3>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nombre:</strong>
            <input type="text" name="nombre" class="form-control" placeholder="Nombre">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Apellido:</strong>
            <input type="text" name="apellido" class="form-control" placeholder="Apellido">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>CURP:</strong>
            <input type="text" name="curp" class="form-control" placeholder="CURP">
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Localidad:</strong>
            {{-- <input type="text" name="localidad_id" class="form-control" placeholder="localidad_id"> --}}
            <select name="localidad_id" class="form-select" aria-label="Default select example">
                <option selected></option>    
                @foreach ($localidades as $localidad)
                <option value="{{$localidad->id}}">{{$localidad->tipo}}</option>
                @endforeach 
            </select>
        </div>
    </div>

    <div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Actividad:</strong>
            {{-- <input type="text" name="localidad_id" class="form-control" placeholder="localidad_id"> --}}
            <select name="actividad_id" class="form-select" aria-label="Default select example">
                <option selected></option>    
                @foreach ($actividad as $act)
                <option value="{{$act->id}}">{{$act->nombre}}</option>
                @endforeach 
            </select>
        </div>
    </div>
<div class="col-xs-6 col-sm-6 col-md-6">
        <div class="form-group">
            <strong>Fecha de la Actividad:</strong>
            {{-- <input type="text" name="localidad_id" class="form-control" placeholder="localidad_id"> --}}
            <select name="fecha_id" class="form-select" aria-label="Default select example">
                <option selected></option>    
                @foreach ($fechas as $fecha)
                <option value="{{$fecha->id}}">{{$fecha->dia}} {{$fecha->hora}}</option>
                @endforeach 
            </select>
        </div>
</div>


<div class="col-xs-6 col-sm-6 col-md-6">
    <div class="form-group">
        <strong>Actividad:</strong>
        {{-- <input type="text" name="localidad_id" class="form-control" placeholder="localidad_id"> --}}
        <select name="actividad_id" class="form-select" aria-label="Default select example">
            <option selected></option>    
            @foreach ($actividad as $act)
            <option value="{{$act->id}}">{{$act->nombre}}</option>
            @endforeach 
        </select>
    </div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6">
    <div class="form-group">
        <strong>Fecha de la Actividad:</strong>
        {{-- <input type="text" name="localidad_id" class="form-control" placeholder="localidad_id"> --}}
        <select name="fecha_id" class="form-select" aria-label="Default select example">
            <option selected></option>    
            @foreach ($fechas as $fecha)
            <option value="{{$fecha->id}}">El dia {{$fecha->dia}} a la hora de {{$fecha->hora}}</option>
            @endforeach 
        </select>
    </div>
</div>


<div class="col-xs-6 col-sm-6 col-md-6">
    <div class="form-group">
        <strong>Actividad:</strong>
        {{-- <input type="text" name="localidad_id" class="form-control" placeholder="localidad_id"> --}}
        <select name="actividad_id" class="form-select" aria-label="Default select example">
            <option selected></option>    
            @foreach ($actividad as $act)
            <option value="{{$act->id}}">{{$act->nombre}}</option>
            @endforeach 
        </select>
    </div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6">
    <div class="form-group">
        <strong>Fecha de la Actividad:</strong>
        {{-- <input type="text" name="localidad_id" class="form-control" placeholder="localidad_id"> --}}
        <select name="fecha_id" class="form-select" aria-label="Default select example">
            <option selected></option>    
            @foreach ($fechas as $fecha)
            <option value="{{$fecha->id}}">El dia {{$fecha->dia}} a la hora de {{$fecha->hora}}</option>
            @endforeach 
        </select>
    </div>
</div>

    <div class="row">
        <h3>Familiar 2</h3>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nombre:</strong>
                <input type="text" name="nombre" class="form-control" placeholder="Nombre">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Apellido:</strong>
                <input type="text" name="apellido" class="form-control" placeholder="Apellido">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>CURP:</strong>
                <input type="text" name="curp" class="form-control" placeholder="CURP">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Localidad:</strong>
                {{-- <input type="text" name="localidad_id" class="form-control" placeholder="localidad_id"> --}}
                <select name="localidad_id" class="form-select" aria-label="Default select example">
                    <option selected></option>    
                    @foreach ($localidades as $localidad)
                    <option value="{{$localidad->id}}">{{$localidad->tipo}}</option>
                    @endforeach 
                </select>
            </div>
        </div>
    





    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <h4>Costo: <strong>$500</strong></h4>
            <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</div>
</form>
@endsection