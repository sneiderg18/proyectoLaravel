@php
    $p = $producto ?? null;
@endphp

<div class="col-md-6">
    <label class="form-label">Nombre</label>
    <input type="text" name="nombre" class="form-control @error('nombre') is-invalid @enderror" value="{{old('nombre', $p->nombre ?? '')}}" required>
    @error('nombre') <div class="invalid-feedback">{{$message}}</div>@enderror
</div>
<div class="col-md-3">
    <label class="form-label">Precio</label>
    <input type="number" step="0.01" min="0" class="form-control @error('precio') is-invalid @enderror" value="{{old('precio', $p->precio ?? '')}}" required>
    @error('precio') <div class="invalid-feedback">{{$message}}</div>@enderror
</div>
<div class="col-md-3">
    <label class="form-label">stock</label>
    <input type="number" min="0" name="stock" class="form-control @error('stock') is-invalid @enderror" value="{{old('stock', $p->stock ?? 0)}}" required>
    @error('stock') <div class="invalid-feedback">{{$message}}</div>@enderror
</div>
<div class="col-md-6">
    <label class="form-label">Descripcion</label>
    <textarea name="descripcion" rows="4" class="form-control @error('descripcion') is-invalid @enderror">{{old('descripcion')}}</textarea>
    @error('descripcion') <div class="invalid-feedback">{{$message}}</div>@enderror
</div>