
<div class="col-md-5">
    <table class="table table-bordered">
    <tr>
          <th>Dia</th>
          <th>Horarios Disponibles</th>
      </tr>
      @foreach ($ResumenFechas as $resumen)
      <tr>
          <td>{{ $resumen->Dia }}</td>
          <td>
              <ul>
                  @foreach (explode("/",$resumen->Hora) as $item)
                   <li>{{$item}}</li>
                  @endforeach
              </ul> 
          </td>
      </tr>
      @endforeach
  </table>
</div>