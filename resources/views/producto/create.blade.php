
@extends('adminlte::page')

@section('title', 'Crear producto')

@section('content_header')
    <h1>Crear producto</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('productos.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="cantidad">cantidad</label>
                    <input type="number" name="cantidad" id="cantidad" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="precio">Precio</label>
                    <input type="number" name="precio" id="precio" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <input type="text" name="descripcion" id="descripcion" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="marca">Marca</label>
                    <input type="marca" name="marca" id="marca" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="agregado_fecha">Fecha de ingreso</label>
                    <input type="date" name="dagregado_fecha" id="agregado_fecha" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="fecha_vencimiento">Fecha de vencimiento</label>
                    <input type="date" name="fecha_vencimiento" id="fecha_vencimiento" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="categoria">Categoria</label>
                    <input type="text" name="categoria" id="categoria" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
@stop
