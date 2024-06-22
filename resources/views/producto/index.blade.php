<!-- resources/views/empleados/index.blade.php -->

@extends('adminlte::page')

@section('title', 'Lista de Productos')

@section('content_header')
    <h1>Lista de Productos</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Productos Registrados</h3>
            <div class="card-tools">
                <a href="{{ route('productos.create') }}" class="btn btn-primary">Nuevo Productos</a>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>nombre</th>
                        <th>cantidad</th>
                        <th>precio</th>
                        <th>descripcion</th>
                        <th>agregado_fecha</th>
                        <th>fecha_vencimiento</th>
                        <th>categoria</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($Productos as $Producto)
                    <tr>
                        <td>{{ $Producto->id }}</td>
                        <td>{{ $Producto->nombre }}</td>
                        <td>{{ $Producto->cantidad }}</td>
                        <td>{{ $Producto->precio }}</td>
                        <td>{{ $Producto->descripcion }}</td>
                        <td>{{ $Producto->agregado_fecha }}</td>
                        <td>{{ $Producto->fecha_vencimiento }}</td>
                        <td>{{ $Producto->categoria}}</td>
                        <td>
                            <a href="{{ route('productos.show', $Producto->id) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('productos.edit', $Producto->id) }}" class="btn btn-primary btn-sm">Editar</a>
                            <form action="{{ route('productos.destroy', $Producto->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que quieres eliminar este empleado?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

