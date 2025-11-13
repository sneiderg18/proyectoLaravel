@extends('layout')

@section('title', 'Lista de productos')

@section('contenido')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1 class="h3">Productos</h1>
    <a class="btn btn-primary" href="{{ route('productos.create')}}">Nuevo producto</a>
</div>

@if($productos->count())
    <div class="table-responsive">
        <table class="table table-striped align-middle">
            <thead class="table-dark">
                <tr>
                    <th>Nombre</th>
                    <th>Precio</th>
                    <th>Stock</th>
                    <th>Descripción</th>
                    <th>Categoría</th> <!-- 👈 Nueva columna -->
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productos as $prod)
                    <tr>
                        <td>{{ $prod->nombre }}</td>
                        <td><a href="{{ route('productos.show', $prod) }}">{{ $prod->precio }}</a></td>
                        <td>{{ $prod->stock }}</td>
                        <td>{{ $prod->descripcion }}</td>
                        <td>
                            {{ $prod->categoria ? $prod->categoria->nombre : 'Sin categoría' }}
                        </td>
                        <td class="d-flex gap-2">
                            <a class="btn btn-success btn-sm" href="{{ route('productos.edit',$prod) }}">Editar</a>
                            <form action="{{ route('productos.destroy', $prod)}}" method="POST" onsubmit="return confirm('¿Eliminar el producto {{ $prod->nombre }}?')">
                                @csrf 
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@else
    <p class="text-muted">No hay productos aún.</p>
@endif
@endsection
