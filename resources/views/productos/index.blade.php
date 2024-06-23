@extends('adminlte::page')

@section('title', 'Listado de Productos')

@section('content_header')
    <h1>Listado de Productos</h1>
@stop

@section('content')
    @if(session('success'))
        <div class="alert alert-success" id="success-alert">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('productos.create') }}" class="btn btn-primary mb-3">Crear Producto</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Marca</th>
                <th>Fecha de Agregado</th>
                <th>Fecha de Vencimiento</th>
                <th>Categoria</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $producto)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->cantidad }}</td>
                    <td>{{ $producto->precio }}</td>
                    <td>{{ $producto->marca }}</td>
                    <td>{{ $producto->agregado_fecha }}</td>
                    <td>{{ $producto->fecha_vencimiento }}</td>
                    <td>{{ $producto->categoria }}</td>
                    <td>
                        <a href="{{ route('productos.edit', $producto) }}" class="btn btn-warning">Editar</a>
                        <a href="{{ route('productos.show', $producto) }}" class="btn btn-warning">ver</a>
                        <form action="{{ route('productos.destroy', $producto) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        // Desaparecer el mensaje de éxito después de 3 segundos
        document.addEventListener('DOMContentLoaded', function() {
            const alert = document.getElementById('success-alert');
            if (alert) {
                setTimeout(() => {
                    alert.style.display = 'none';
                }, 3000);
            }
        });
    </script>
@stop
