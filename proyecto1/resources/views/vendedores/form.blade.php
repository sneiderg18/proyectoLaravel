<div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre"
        value="{{ old('nombre', $vendedor->nombre ?? '') }}">
</div>

<div class="mb-3">
    <label for="cargo" class="form-label">Cargo</label>
    <input type="text" class="form-control" id="cargo" name="cargo"
        value="{{ old('cargo', $vendedor->cargo ?? '') }}">
</div>

<div class="mb-3">
    <label for="telefono" class="form-label">Teléfono</label>
    <input type="text" class="form-control" id="telefono" name="telefono"
        value="{{ old('telefono', $vendedor->telefono ?? '') }}">
</div>