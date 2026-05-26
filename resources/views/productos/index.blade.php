@extends('layouts.principal')

@section('contenido')
    <a href="{{ route('productos.create') }}">➕ Agregar producto</a>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Categoría</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $item)
            <tr>
                <td>{{ $item->nombre }}</td>
                <td>${{ number_format($item->precio, 2) }}</td>
                <td>{{ $item->stock }}</td>
                <td>{{ $item->categoria->descripcion }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    {{ $productos->links() }}
@endsection