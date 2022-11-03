@foreach ($ResumenPersonaActividades as $resumen)
<tr>
    <td>{{ $resumen->Nombre }}</td>
    <td>{{ $resumen->Actividad }}</td>
    <td>{{ $resumen->Fecha }}</td>
</tr>
@endforeach

{{-- {{ $ResumenPersonaActividades }} --}}