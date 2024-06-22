@extends('adminlte::page')

@section('title', 'Editar Empleado')

@section('content_header')
    <h1>Editar Productos</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('productos.update', $Productos->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $Productos->nombre }}" required>
                </div>
                <div class="form-group">
                    <label for="cantidad">Cantidad</label>
                    <input type="number" name="cantidad" id="cantidad" class="form-control" value="{{ $Productos->cantidad }}" required>
                </div>
                <div class="form-group">
                    <label for="precio">Precio</label>
                    <input type="number" name="precio" id="precio" class="form-control" value="{{ $Productos->precio }}" required>
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{ $Productos->descripcion }}" required>
                </div>
                <div class="form-group">
                    <label for="marca">Marca</label>
                    <input type="text" name="marca" id="marca" class="form-control" value="{{ $Productos->marca }}" required>
                </div>
                <div class="form-group">
                    <label for="agregado_fecha">Fecha de ingreso</label>
                    <input type="date" name="agregado_fecha" id="agregado_fecha" class="form-control" value="{{ $Productos->agregado_fecha}}" required>
                </div>
                <div class="form-group">
                    <label for="fecha_vencimiento">Fecha de vencimiento</label>
                    <input type="date" name="fecha_vencimiento" id="fecha_vencimiento" class="form-control" value="{{ $Productos->fecha_vencimiento }}" required>
                </div>
                <div class="form-group">
                    <label for="categoria">Categoria</label>
                    <input type="text" name="categoria" id="categoria" class="form-control" value="{{ $Productos->categoria}}" required>
                </div>
                <button type="submit" class="btn btn-primary">Guardar cambios</button>
            </form>
        </div>
    </div>
@stop


