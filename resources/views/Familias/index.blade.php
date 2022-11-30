@extends('familias.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Deportiva Digital</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('familias.create') }}"> Registra una Familia</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>#</th>
                <th>Folio</th>
                <th>Nombre</th>
                <th width="280px">Accion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($familias as $familia)
                <tr>
                    <th>{{ $familia->id }}</th>
                    <td>{{ $familia->folio }}</td>
                    <td>
                        {{-- {{ $familia->persona_id }} --}}
                        @foreach ($personas as $persona)
                            @if ($familia->persona_id == $persona->id)
                                {{ $persona->nombre }}
                            @endif
                        @endforeach
                    </td>
                    <td>
                        <form action="{{ route('familias.destroy', $familia->id) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('familias.show', $familia->id) }}">Mostrar</a>

                            <a class="btn btn-primary" href="{{ route('familias.edit', $familia->id) }}">Editar</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
