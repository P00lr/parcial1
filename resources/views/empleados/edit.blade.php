@extends('adminlte::page')

@section('title', 'Editar Empleado')

@section('content_header')
    <h1>Editar Empleado</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('empleados.update', $empleado->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nombreCompleto">Nombre Completo</label>
                            <input type="text" name="nombreCompleto" id="nombreCompleto" class="form-control" value="{{ $empleado->nombreCompleto }}" required>
                        </div>
                        <div class="form-group">
                            <label for="ci">CI</label>
                            <input type="text" name="ci" id="ci" class="form-control" value="{{ $empleado->ci }}" required>
                        </div>
                        <div class="form-group">
                            <label for="telefono">Teléfono</label>
                            <input type="text" name="telefono" id="telefono" class="form-control" value="{{ $empleado->telefono }}" required>
                        </div>
                        <div class="form-group">
                            <label for="fechaNacimiento">Fecha de Nacimiento</label>
                            <input type="date" name="fechaNacimiento" id="fechaNacimiento" class="form-control" value="{{ $empleado->fechaNacimiento }}" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ $empleado->email }}" required>
                        </div>
                        <div class="form-group">
                            <label for="direccion">Dirección</label>
                            <input type="text" name="direccion" id="direccion" class="form-control" value="{{ $empleado->direccion }}" required>
                        </div>
                        <div class="form-group">
                            <label for="cargo">Cargo</label>
                            <input type="text" name="cargo" id="cargo" class="form-control" value="{{ $empleado->cargo }}" required>
                        </div>
                        <div class="form-group">
                            <label for="salario">Salario</label>
                            <input type="text" name="salario" id="salario" class="form-control" value="{{ $empleado->salario }}" required>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Guardar cambios</button>
            </form>
        </div>
    </div>
@stop


