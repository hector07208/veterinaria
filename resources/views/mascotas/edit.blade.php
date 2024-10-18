@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Mascota</h1>
        <form action="{{ route('mascotas.update', $mascota) }}" method="POST">
            @csrf
            @method('PUT') <!-- Cambia a PUT si estás usando update -->
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control" value="{{ $mascota->nombre }}" required>
            </div>
            <div class="form-group">
                <label for="raza">Raza</label>
                <input type="text" name="raza" class="form-control" value="{{ $mascota->raza }}" required>
            </div>
            <div class="form-group">
                <label for="dueno_id">Dueño</label>
                <select name="dueno_id" class="form-control">
                    @foreach($duenos as $dueno)
                        <option value="{{ $dueno->id }}" {{ $dueno->id == $mascota->dueno_id ? 'selected' : '' }}>
                            {{ $dueno->nombre }} {{ $dueno->apellido }}
                        </option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
        </form>
    </div>
@endsection
