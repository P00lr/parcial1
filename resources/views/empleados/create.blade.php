
@extends('adminlte::page')

@section('title', 'Crear Empleado')

@section('content_header')
    <h1>Crear Empleado</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('empleados.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nombreCompleto">Nombre Completo</label>
                    <input type="text" name="nombreCompleto" id="nombreCompleto" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="ci">CI</label>
                    <input type="text" name="ci" id="ci" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input type="text" name="telefono" id="telefono" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="fechaNacimiento">Fecha de Nacimiento</label>
                    <input type="date" name="fechaNacimiento" id="fechaNacimiento" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="direccion">Dirección</label>
                    <input type="text" name="direccion" id="direccion" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="cargo">Cargo</label>
                    <input type="text" name="cargo" id="cargo" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="salario">Salario</label>
                    <input type="text" name="salario" id="salario" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
@stop
