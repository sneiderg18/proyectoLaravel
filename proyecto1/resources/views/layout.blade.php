<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'CRUD Productos')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('productos.index') }}">Productos</a>
            <a class="navbar-brand" href="{{ route('categorias.index') }}">Categoria</a>
            <a class="navbar-brand" href="{{ route('vendedores.index') }}">Vendedor</a>
        </div>
    </nav>

    <main class="container py-4">
        @if(session('ok'))
            <div class="alert alert-success">
                {{ session('ok') }}
            </div>
        @endif

        @yield('contenido')
    </main>

</body>
</html>