@extends('layout')

@section('title', 'crear vendedor')

@section('contenido')

<div class="container">
    <h1>Formulario crear Vendedor</h1>
    <form id="formVendedor" action="{{ route('vendedores.store')}}" method="POST">
        @csrf 
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="cargo" class="form-label">Cargo</label>
            <input type="text" class="form-control" id="cargo" name="cargo" required>
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Telefono</label>
            <input type="number" class="form-control" id="telefono" name="telefono" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>

<script>
    const form = document.getElementById('formVendedor');

    form.addEventListener('submit', function(e) {
        const nombre = document.getElementById('nombre').value.trim();
        const cargo = document.getElementById('cargo').value.trim();
        const telefono = document.getElementById('telefono').value.trim();

        if (!nombre || !cargo || !telefono) {
            e.preventDefault(); // evita que se envíe el formulario
            alert('Todos los campos son obligatorios');
        }
    });
</script>

@endsection
