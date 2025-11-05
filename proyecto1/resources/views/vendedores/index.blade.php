@extends('layout')

@section('title', 'Lista de vendedores')

@section('contenido')
<div>
    <a class="btn btn-primary" href="{{route('vendedores.create')}}">Nuevo vendedor</a>
</div>
    @if($vendedores->count())
        <div class="table-responsive">
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
                    @foreach($vendedores as $vend)
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
                                <a class="btn btn-success" href="{{ route('vendedores.edit', $vend)}}">Editar</a>
                                <button class="btn btn-danger">Eliminar</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p class="text-muted">No hay Vendedores aún.</p>
    @endif
@endsection