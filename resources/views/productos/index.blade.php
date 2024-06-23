@extends('adminlte::page')

@section('title', 'Listado de Productos')

@section('content_header')
    <h1 class="text-center">Listado de Productos</h1>
@stop

@section('content')
    @if(session('success'))
        <div class="alert alert-success" id="success-alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Productos Registrados</h3>
            <div class="card-tools">
                <a href="{{ route('productos.create') }}" class="btn btn-primary">Nuevo Producto</a>
            </div>
        </div>
        <div class="card-body">
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
                        <th>Categoría</th>
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
                                <a href="{{ route('productos.show', $producto->id) }}" class="btn btn-info btn-sm">Ver</a>
                                <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-primary btn-sm">Editar</a>
                                <form action="{{ route('productos.destroy', $producto->id) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que quieres eliminar este producto?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

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
