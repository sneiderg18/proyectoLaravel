@extends('layout')

@section('title', 'Lista de vendedores')

@section('contenido')
<div>
    <a class="btn btn-primary" href="{{ route('vendedores.create') }}">Nuevo vendedor</a>
</div>

@if ($vendedores->count())
    <div class="table-responsive mt-3">
        <table class="table table-striped align-middle">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Cargo</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($vendedores as $vend)
                    <tr>
                        <td>{{ $vend->id }}</td>
                        <td>
                            <a href="{{ route('vendedores.show', $vend) }}">
                                {{ $vend->nombre }}
                            </a>
                        </td>
                        <td>{{ $vend->cargo }}</td>
                        <td>{{ $vend->telefono }}</td>
                        <td>
                            <a class="btn btn-success btn-sm" href="{{ route('vendedores.edit', $vend) }}">
                                Editar
                            </a>

                            <form action="{{ route('vendedores.destroy', $vend) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm"
                                    onclick="return confirm('¿Seguro que deseas eliminar este vendedor?')">
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
    <p class="text-muted mt-3">No hay vendedores aún.</p>
@endif
@endsection