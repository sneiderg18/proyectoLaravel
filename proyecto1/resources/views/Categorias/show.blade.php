@extends('layout')

@section('title', 'Detalles de la Categoría')

@section('contenido')
<div class="container mt-4">
    <h1 class="mb-4 text-center">Detalles de la Categoría</h1>

    <div class="card">
        <div class="card-body">
            <h4><strong>Nombre:</strong> {{ $categoria->nombre }}</h4>
            <p><strong>Descripción:</strong> {{ $categoria->descripcion ?? 'Sin descripción' }}</p>
        </div>
    </div>

    <div class="mt-3 text-center">
        <a href="{{ route('categorias.index') }}" class="btn btn-primary">Volver a la lista</a>
        <a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-warning">Editar</a>
    </div>
</div>
@endsection
