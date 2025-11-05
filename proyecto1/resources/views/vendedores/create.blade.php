@extends('layout')

@section('title', 'crear vendedor')

@section('contenido')

<div class="container">
    <h1>Formulario crear Vendedor</h1>
    <form action="{{ route('vendedores.store')}}" method="POST">
        @csrf 
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="mb-3">
            <label for="cargo" class="form-label">Cargo</label>
            <input type="text" class="form-control" id="cargo" name="cargo">
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Telefono</label>
            <input type="number" class="form-control" id="telefono" name="telefono">
        </div>
        
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>

@endsection