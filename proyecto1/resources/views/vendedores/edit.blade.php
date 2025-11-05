@extends('layout')

@section('title', 'Editar vendedor')

@section('contenido')

<div class="container">
    <h1>Formulario editar Vendedor</h1>

    {{-- ✅ Importante: usar $vendedor (igual que en el controlador) --}}
    <form action="{{ route('vendedores.update', $vendedor) }}" method="POST">

        @csrf
        @method('PUT') {{-- Indica que es una actualización --}}

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input 
                type="text" 
                class="form-control" 
                id="nombre" 
                name="nombre" 
                value="{{ $vendedor->nombre }}" 
                required>
        </div>

        <div class="mb-3">
            <label for="cargo" class="form-label">Cargo</label>
            <input 
                type="text" 
                class="form-control" 
                id="cargo" 
                name="cargo" 
                value="{{ $vendedor->cargo }}" 
                required>
        </div>

        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input 
                type="text" 
                class="form-control" 
                id="telefono" 
                name="telefono" 
                value="{{ $vendedor->telefono }}" 
                required>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <a href="{{ route('vendedores.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

@endsection
