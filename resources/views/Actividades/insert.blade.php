<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deportiva</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
  <body>
    <div class="container mt-3">
    <div class="row">
    <div class="col-md-12">
      
    <form action="{{ route('actividades.insert') }}" method="POST">    
    {{-- <form action=""                            method="POST"> --}}
    @csrf
    <div class="form-group row">
    <label class="col-sm-2 col-form-label">nombre</label>
    <div class="col-sm-10">
    <input type="text" class="form-control-plaintext" name="nombre" placeholder="nombre">
    </div>
    </div>
    <div class="form-group row">
    <label class="col-sm-2 col-form-label">descripcion</label>
    <div class="col-sm-10">
    <input type="text" class="form-control-plaintext" name="descripcion" placeholder="descripcion">
    </div>
    </div>
    <button class="btn btn-info col-md-10">Enviar</button>
    </div>
    </form>
    </div>
    </div>
    </div>
    
    
    </body>
</html>

