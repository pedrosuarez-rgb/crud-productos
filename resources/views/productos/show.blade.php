@extends('layouts.principal')

@section('contenido')

    <h2>Detalle del Producto</h2>

    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" value="{{ $producto->nombre }}" readonly><br>

    <label for="precio">Precio</label>
    <input type="text" name="precio" value="{{ $producto->precio }}" readonly><br>

    <label for="stock">Stock</label>
    <input type="text" name="stock" value="{{ $producto->stock }}" readonly><br>

    <label for="marca">Categoría</label>
    <input type="text" name="categoria" value="{{ $producto->categoria->descripcion }}" readonly><br>

    <a href="{{ route('productos.edit', ['producto' => $producto->id_producto]) }}">Editar</a> |
    <a href="{{ route('productos.index') }}">Regresar</a>

@endsection