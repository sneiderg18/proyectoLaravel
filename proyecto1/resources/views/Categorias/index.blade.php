@extends('layout')

@section('title', 'Lista de Categorías')

@section('contenido')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h3">Categorías</h1>
    <a class="btn btn-primary" href="{{ route('categorias.create') }}">Nueva categoría</a>
</div>

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if ($categorias->count())
    <div class="table-responsive mt-3">
        <table class="table table-striped align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categorias as $categoria)
                    <tr>
                        <td>{{ $categoria->id }}</td>
                        <td>
                            <a href="{{ route('categorias.show', $categoria) }}">
                                {{ $categoria->nombre }}
                            </a>
                        </td>
                        <td>{{ $categoria->descripcion }}</td>
                        <td>
                            <a class="btn btn-success btn-sm" href="{{ route('categorias.edit', $categoria) }}">
                                Editar
                            </a>

                            <form action="{{ route('categorias.destroy', $categoria) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('¿Seguro que deseas eliminar la categoría {{ $categoria->nombre }}?')">
                                    Eliminar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@else
    <p class="text-muted mt-3">No hay categorías aún.</p>
@endif
@endsection
