@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Mas mascotas</h1>
    <a href="{{ route('mascotas.create') }}" class="btn btn-primary">Agregar Mascota</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Especie</th>
                <th>Raza</th>
                <th>Edad</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mascotas as $mascota)
            <tr>
                <td>{{ $mascota->id }}</td>
                <td>{{ $mascota->nombre }}</td>
                <td>{{ $mascota->especie }}</td>
                <td>{{ $mascota->raza }}</td>
                <td>{{ $mascota->edad }}</td>
                <td>
                    <a href="{{ route('mascotas.edit', $mascota) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('mascotas.destroy', $mascota) }}" method="POST" style="display:inline;">
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
