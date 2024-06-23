@extends('adminlte::page')

@section('title', 'Detalle del Producto')

@section('content_header')
    <h1 class="text-center">Detalle del Producto</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" id="nombre" class="form-control" value="{{ $producto->nombre }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="cantidad">Cantidad:</label>
                        <input type="number" id="cantidad" class="form-control" value="{{ $producto->cantidad }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio:</label>
                        <input type="text" id="precio" class="form-control" value="{{ $producto->precio }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="marca">Marca:</label>
                        <input type="text" id="marca" class="form-control" value="{{ $producto->marca }}" disabled>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="agregado_fecha">Fecha de Agregado:</label>
                        <input type="date" id="agregado_fecha" class="form-control" value="{{ $producto->agregado_fecha }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="fecha_vencimiento">Fecha de Vencimiento:</label>
                        <input type="date" id="fecha_vencimiento" class="form-control" value="{{ $producto->fecha_vencimiento }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="categoria">Categoría:</label>
                        <input type="text" id="categoria" class="form-control" value="{{ $producto->categoria }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="descripcion">Descripción:</label>
                        <textarea id="descripcion" class="form-control" disabled>{{ $producto->descripcion }}</textarea>
                    </div>
                </div>
            </div>
            <a href="{{ route('productos.index') }}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
@stop
