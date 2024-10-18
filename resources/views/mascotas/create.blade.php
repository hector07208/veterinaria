@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Mascota</h1>
    <form action="{{ route('mascotas.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="especie" class="form-label">Especie</label>
            <input type="text" class="form-control" name="especie" required>
        </div>
        <div class="mb-3">
            <label for="raza" class="form-label">Raza</label>
            <input type="text" class="form-control" name="raza" required>
        </div>
        <div class="mb-3">
            <label for="edad" class="form-label">Edad</label>
            <input type="number" class="form-control" name="edad" required>
        </div>
        <div class="mb-3">
            <label for="dueno_id" class="form-label">Dueño</label>
            <select class="form-control" name="dueno_id" required>
                @foreach ($duenos as $dueno)
                <option value="{{ $dueno->id }}">{{ $dueno->nombre }} {{ $dueno->apellido }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</div>
@endsection
