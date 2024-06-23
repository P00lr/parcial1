@extends('adminlte::page')

@section('title', 'Editar Producto')

@section('content_header')
    <h1 class="text-center">Editar Producto</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('productos.update', $producto->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nombre">Nombre</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $producto->nombre }}" required>
                        </div>
                        <div class="form-group">
                            <label for="cantidad">Cantidad</label>
                            <input type="number" name="cantidad" id="cantidad" class="form-control" value="{{ $producto->cantidad }}" required>
                        </div>
                        <div class="form-group">
                            <label for="precio">Precio</label>
                            <input type="text" name="precio" id="precio" class="form-control" value="{{ $producto->precio }}" required>
                        </div>
                        <div class="form-group">
                            <label for="marca">Marca</label>
                            <input type="text" name="marca" id="marca" class="form-control" value="{{ $producto->marca }}" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="agregado_fecha">Fecha de Agregado</label>
                            <input type="date" name="agregado_fecha" id="agregado_fecha" class="form-control" value="{{ $producto->agregado_fecha }}" required>
                        </div>
                        <div class="form-group">
                            <label for="fecha_vencimiento">Fecha de Vencimiento</label>
                            <input type="date" name="fecha_vencimiento" id="fecha_vencimiento" class="form-control" value="{{ $producto->fecha_vencimiento }}" required>
                        </div>
                        <div class="form-group">
                            <label for="categoria">Categoría</label>
                            <input type="text" name="categoria" id="categoria" class="form-control" value="{{ $producto->categoria }}" required>
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <textarea name="descripcion" id="descripcion" class="form-control">{{ $producto->descripcion }}</textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Guardar cambios</button>
            </form>
        </div>
    </div>
@stop
