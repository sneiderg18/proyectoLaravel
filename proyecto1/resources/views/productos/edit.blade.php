@extends('layout')

@section('title', 'Editar Producto')

@section('contenido')

<div class="container">
    <h1>Formulario Editar Producto</h1>

    <form action="{{ route('productos.update', $producto->id) }}" method="POST">
        @csrf 
        @method('PUT')

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del producto</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $producto->nombre }}" required>
        </div>

        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="number" step="0.01" class="form-control" id="precio" name="precio" value="{{ $producto->precio }}" required>
        </div>

        <div class="mb-3">
            <label for="stock" class="form-label">Stock disponible</label>
            <input type="number" class="form-control" id="stock" name="stock" value="{{ $producto->stock }}" required>
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="3">{{ $producto->descripcion }}</textarea>
        </div>

        <div class="mb-3">
            <label for="categoria_id" class="form-label">Categoría</label>
            <select name="categoria_id" id="categoria_id" class="form-select" required>
                <option value="">Seleccione una categoría</option>
                @foreach($categorias as $cat)
                    <option value="{{ $cat->id }}" 
                        {{ $producto->categoria_id == $cat->id ? 'selected' : '' }}>
                        {{ $cat->nombre }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>

@endsection
