@extends('layout')

@section('title', 'Crear Producto')

@section('contenido')

<div class="container">
    <h1>Formulario Crear Producto</h1>

    <form action="{{ route('productos.store') }}" method="POST">
        @csrf 

        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre del producto</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>

        <div class="mb-3">
            <label for="descripcion" class="form-label">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
        </div>

        <div class="mb-3">
            <label for="precio" class="form-label">Precio</label>
            <input type="number" step="0.01" class="form-control" id="precio" name="precio" required>
        </div>

        <div class="mb-3">
            <label for="stock" class="form-label">Stock disponible</label>
            <input type="number" class="form-control" id="stock" name="stock" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>

@endsection
