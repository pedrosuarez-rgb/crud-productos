@extends('layouts.principal')

@section('contenido')

<h2>Editar Producto</h2>

@if ($errors->any())
<div>
    Se encontraron los siguientes errores:
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('productos.update', ['producto' => $producto->id_producto]) }}" method="POST">
    @csrf
    @method('PATCH')

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" value="{{ $producto->nombre }}" autocomplete="off" required><br>

    <label for="precio">Precio</label>
    <input type="number" name="precio" value="{{ $producto->precio }}" autocomplete="off" required><br>

    <label for="stock">Stock</label>
    <input type="number" name="stock" value="{{ $producto->stock }}" autocomplete="off" required><br>

    <label for="id_categoria">Categoría</label>
    <select name="id_categoria" required>
        <option value="">[ SELECCIONE ]</option>
        @foreach ($categorias as $item)
            <option value="{{ $item->id }}"
                @if ($item->id == $producto->id_categoria)
                    {{ 'selected' }}
                @endif>
                {{ $item->descripcion }}
            </option>
        @endforeach
    </select><br>

    <button type="submit">Guardar</button>
    <a href="{{ route('productos.index') }}">Regresar</a>
</form>

@endsection