<!-- resources/views/empleados/show.blade.php -->

@extends('adminlte::page')

@section('title', 'Detalles del Empleado')

@section('content_header')
    <h1>Detalles del Empleado</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label for="nombreCompleto">Nombre Completo</label>
                <input type="text" id="nombreCompleto" class="form-control" value="{{ $empleado->nombreCompleto }}" readonly>
            </div>
            <div class="form-group">
                <label for="ci">CI</label>
                <input type="text" id="ci" class="form-control" value="{{ $empleado->ci }}" readonly>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input type="text" id="telefono" class="form-control" value="{{ $empleado->telefono }}" readonly>
            </div>
            <div class="form-group">
                <label for="fechaNacimiento">Fecha de Nacimiento</label>
                <input type="date" id="fechaNacimiento" class="form-control" value="{{ $empleado->fechaNacimiento }}" readonly>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" class="form-control" value="{{ $empleado->email }}" readonly>
            </div>
            <div class="form-group">
                <label for="direccion">Dirección</label>
                <input type="text" id="direccion" class="form-control" value="{{ $empleado->direccion }}" readonly>
            </div>
            <div class="form-group">
                <label for="cargo">Cargo</label>
                <input type="text" id="cargo" class="form-control" value="{{ $empleado->cargo }}" readonly>
            </div>
            <div class="form-group">
                <label for="salario">Salario</label>
                <input type="text" id="salario" class="form-control" value="{{ $empleado->salario }}" readonly>
            </div>
            <a href="{{ route('empleados.index') }}" class="btn btn-primary">Volver</a>
        </div>
    </div>
@stop

