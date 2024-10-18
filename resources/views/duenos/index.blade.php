@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Dueños</h1>
    <a href="{{ route('duenos.create') }}" class="btn btn-primary">Agregar Dueño</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($duenos as $dueno)
            <tr>
                <td>{{ $dueno->id }}</td>
                <td>{{ $dueno->nombre }}</td>
                <td>{{ $dueno->apellido }}</td>
                <td>
                    <a href="{{ route('duenos.edit', $dueno) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('duenos.destroy', $dueno) }}" method="POST" style="display:inline;">
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
