@extends('layouts.principal')

@section('contenido')
    <h2>Nuevo Producto</h2>

    @if ($errors->any())
        <div class="error">
            Se encontraron los siguientes errores:
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('productos.store') }}" method="POST">
        @csrf

        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="{{ old('nombre') }}" required><br>

        <label for="precio">Precio:</label>
        <input type="number" step="0.01" name="precio" value="{{ old('precio') }}" required><br>

        <label for="stock">Stock:</label>
        <input type="number" name="stock" value="{{ old('stock') }}" required><br>

        <label for="id_categoria">Categoría:</label>
        <select name="id_categoria" required>
            <option value="">[ SELECCIONE ]</option>
            @foreach ($categorias as $item)
                <option value="{{ $item->id }}" {{ old('id_categoria') == $item->id ? 'selected' : '' }}>
                    {{ $item->descripcion }}
                </option>
            @endforeach
        </select><br>

        <button type="submit">Guardar producto</button>
        <a href="{{ route('productos.index') }}">Cancelar</a>
    </form>
@endsection