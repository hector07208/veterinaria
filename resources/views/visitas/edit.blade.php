@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Visita</h1>
    <form action="{{ route('visitas.update', $visita->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="mascota_id">Mascota</label>
            <select name="mascota_id" class="form-control">
                @foreach($mascotas as $mascota)
                    <option value="{{ $mascota->id }}" {{ $mascota->id == $visita->mascota_id ? 'selected' : '' }}>
                        {{ $mascota->nombre }}
                    </option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="fecha_visita">Fecha de Visita</label>
            <input type="date" name="fecha_visita" class="form-control" value="{{ $visita->fecha_visita }}">
        </div>
        <div class="form-group">
            <label for="motivo">Motivo</label>
            <textarea name="motivo" class="form-control">{{ $visita->motivo }}</textarea>
        </div>
        <div class="form-group">
            <label for="tratamiento">Tratamiento</label>
            <textarea name="tratamiento" class="form-control">{{ $visita->tratamiento }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>
@endsection
