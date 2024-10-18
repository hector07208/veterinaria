@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Visitas</h1>
    <a href="{{ route('visitas.create') }}" class="btn btn-primary">Agregar Visita</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Mascota</th>
                <th>Fecha</th>
                <th>Motivo</th>
                <th>Tratamiento</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($visitas as $visita)
            <tr>
                <td>{{ $visita->id }}</td>
                <td>{{ $visita->mascota->nombre }}</td>
                <td>{{ $visita->fecha_visita }}</td>
                <td>{{ $visita->motivo }}</td>
                <td>{{ $visita->tratamiento }}</td>
                <td>
                    <a href="{{ route('visitas.edit', $visita) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('visitas.destroy', $visita) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
