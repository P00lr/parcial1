<!-- resources/views/empleados/show.blade.php -->

@extends('adminlte::page')

@section('title', 'Detalles del Productos')

@section('content_header')
    <h1>Detalles del Producto</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" class="form-control" value="{{ $Productos->nombre }}" readonly>
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad</label>
                <input type="number" id="cantidad" class="form-control" value="{{ $Productos->cantidad }}" readonly>
            </div>
            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="number" id="Precio" class="form-control" value="{{ $Productos->Precio }}" readonly>
            </div>
            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <input type="text" id="descripcion" class="form-control" value="{{ $Productos->descripcion }}" readonly>
            </div>
            <div class="form-group">
                <label for="marca">Marca</label>
                <input type="text" id="marca" class="form-control" value="{{ $Productos->marca }}" readonly>
            </div>
            <div class="form-group">
                <label for="agregado_fecha">Fecha de ingreso</label>
                <input type="date" id="agregado_fecha" class="form-control" value="{{ $Productos->agregado_fecha }}" readonly>
            </div>
            <div class="form-group">
                <label for="fecha_vencimiento">Fecha de vencimiento</label>
                <input type="date" id="fecha_vencimiento" class="form-control" value="{{ $Productos->fecha_vencimiento }}" readonly>
            </div>
            <div class="form-group">
                <label for="categoria">Categoria</label>
                <input type="text" id="categoria" class="form-control" value="{{ $Productos->categoria }}" readonly>
            </div>
            <a href="{{ route('productos.index') }}" class="btn btn-primary">Volver</a>
        </div>
    </div>
@stop

