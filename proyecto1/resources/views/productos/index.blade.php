@extends('layout')

@section('title', 'Lista de productos')

@section('contenido')
<div class="d-flex justify-content-between alingn-items-center mb-3">
    <h1 class="h3">Productos</h1>
    <a class="btn btn-primary" href="{{ route('productos.create')}}">Nuevo</a>
</div>
    @if($productos->count())
        <div class="table-responsive">
            <table class="table table-striped align-middle">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>precio</th>
                        <th>stock</th>
                        <th>descripcion</th>
                        <th>Accion</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($productos as $prod)
                        <tr>
                            <td>{{ $prod->nombre }}</td>
                            <td><a href="{{ route('productos.show', $prod) }}">{{ $prod->precio }}</a></td>
                            <td>{{ $prod->stock }}</td>
                            <td>{{ $prod->descripcion }}</td>
                            <td class="d-flex gap-2">
                                <a class="btn btn-success" href="{{ route('productos.edit',$prod)}}">Editar</a>
                                <form action="{{ route('productos.destroy', $prod)}}" method="POST" onsubmit="return confirm('¿Eliminar?')">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p class="text-muted">No hay Productos aún.</p>
    @endif
    <p>Impresion ejemplo</p>
@endsection