
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>nombre</th>
            <th>descripcion</th>

            <th width="280px">Accion</th>
        </tr>
        @foreach ($actividad as $act)
        <tr>
            <td>{{ $act->id }}</td>
            <td>{{ $act->nombre }}</td>
            <td>{{ $act->descripcion }}</td>

            <td>
                <form action="{{ route('actividad.destroy',$act->id) }}" method="POST">    
                    <a class="btn btn-primary" href="{{ route('actividad.edit',$act->id) }}">Editar</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  