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
