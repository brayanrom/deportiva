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
    

      
    {{-- <div class="card" style="width: 18rem;"> --}}
      <div class="card">

      <img src="..." class="card-img-top" alt="...">
  <div class="card-body">



    <table class="table">
      <thead>
        <tr>
          <th scope="col"># FOLIO</th>
          <th scope="col">Nombre Actividad</th>
          <th scope="col">Descripcion de la Actividad</th>
          <th scope="col">Actualizar</th>
          <th scope="col">Eliminar</th>
        </tr>
      </thead>
      <tbody class="table-group-divider">


    @if ($unico==0)
    @foreach ($actividades as $act)
    <tr>
      <th scope="row">{{$act->id}}</th>
      <td colspan="1">{{ $act->nombre }}</td>
      <td colspan="1">{{ $act->descripcion }}</td>
      <td colspan="1">
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Actualizar
</button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Deportiva Digital Multiple</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="api/actividades/{{$act->id}}" method="put">    
          @csrf
          <div class="form-group row">
          <label class="col-sm-3 col-form-label">nombre</label>
          <div class="col-sm-9">
          <input type="text" class="form-control-plaintext" name="nombre" placeholder="nombre" value="{{ $act->nombre }}">
          </div>
          </div>
          <div class="form-group row">
          <label class="col-sm-3 col-form-label">descripcion</label>
          <div class="col-sm-9">
          <input type="text" class="form-control-plaintext" name="descripcion" placeholder="descripcion" value="{{ $act->descripcion }}">
          </div>
          </div>
          <button class="btn btn-secondary col-md-4" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary col-md-4">Guardar</button>
          </div>
          </form>      
        </div>

      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>




      </td>
      <td colspan="1">
        <button type="button" class="btn btn-danger">Eliminar</button>
      </td>









    </tr>
    @endforeach
    @endif
    

    @if ($unico==1)
    <tr>
      <th scope="row">{{$act->id}}</th>
      <td colspan="1">{{ $act->nombre }}</td>
      <td colspan="1">{{ $act->descripcion }}</td>
      <td colspan="1">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Actualizar
        </button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Deportiva Digital Solo</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="{{ route('alumnos.store') }}" method ="PUT">
                <form action="{{$act->id}}" method="put">    
                  @csrf
                  <div class="form-group row">
                  <label class="col-sm-3 col-form-label">nombre</label>
                  <div class="col-sm-9">
                  <input type="text" class="form-control-plaintext" name="nombre" placeholder="nombre" value="{{ $act->nombre }}">
                  </div>
                  </div>
                  <div class="form-group row">
                  <label class="col-sm-3 col-form-label">descripcion</label>
                  <div class="col-sm-9">
                  <input type="text" class="form-control-plaintext" name="descripcion" placeholder="descripcion" value="{{ $act->descripcion }}">
                  </div>
                  </div>
                  <button class="btn btn-secondary col-md-4" data-bs-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-primary col-md-4">Guardar</button>
                  </div>
                  </form>      
                </div>
        
              <div class="modal-footer">
        
              </div>
            </div>
          </div>
        </div>
        
        
        
        
              </td>
              <td colspan="1">
                <button type="button" class="btn btn-danger">Eliminar</button>
              </td>
        


    </tr>
    @endif


  </tbody>
</table>
  </div>
</div>

    
    
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
   
  </body>
</html>
