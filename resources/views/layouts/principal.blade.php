<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Productos</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        nav ul { list-style: none; padding: 0; display: flex; gap: 20px; background: #eee; padding: 10px; }
        nav ul li a { text-decoration: none; color: blue; }
        main { margin-top: 20px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background: #f2f2f2; }
        .error { color: red; background: #ffe6e6; padding: 10px; margin-bottom: 10px; }
        .success { color: green; background: #e6ffe6; padding: 10px; margin-bottom: 10px; }
    </style>
</head>
<body>
    <h1>Productos</h1>
    <nav>
        <ul>
            <li><a href="{{ url('/productos') }}">Productos</a></li>
            <li><a href="#">Categorías</a></li>
        </ul>
    </nav>
    <main>
        @if(session('success'))
            <div class="success">{{ session('success') }}</div>
        @endif
        @yield('contenido')
    </main>
</body>
</html>