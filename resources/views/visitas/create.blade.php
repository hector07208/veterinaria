@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Visita</h1>
    <form action="{{ route('visitas.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="mascota_id" class="form-label">Mascota</label>
            <select class="form-control" name="mascota_id" required>
                @foreach ($mascotas as $mascota)
                <option value="{{ $mascota->id }}">{{ $mascota->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="fecha_visita" class="form-label">Fecha de Visita</label>
            <input type="date" class="form-control" name="fecha_visita" required>
        </div>
        <div class="mb-3">
            <label for="motivo" class="form-label">Motivo</label>
            <textarea class="form-control" name="motivo" required></textarea>
        </div>
        <div class="mb-3">
            <label for="tratamiento" class="form-label">Tratamiento</label>
            <textarea class="form-control" name="tratamiento" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</div>
@endsection
