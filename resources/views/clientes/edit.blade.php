@extends('adminlte::page')

@section('title', 'Editar Cliente')

@section('content_header')
    <h1>Editar Cliente</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="nombreCompleto">Nombre Completo</label>
                    <input type="text" name="nombreCompleto" id="nombreCompleto" class="form-control" value="{{ $cliente->nombreCompleto }}" required>
                </div>

                <div class="form-group">
                    <label for="telefono">Teléfono</label>
                    <input type="text" name="telefono" id="telefono" class="form-control" value="{{ $cliente->telefono }}" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ $cliente->email }}" required>
                </div>

                <div class="form-group">
                    <label for="direccion">Dirección</label>
                    <input type="text" name="direccion" id="direccion" class="form-control" value="{{ $cliente->direccion }}" required>
                </div>

                <div class="form-group">
                    <label for="genero">Género</label>
                    <select name="genero" id="genero" class="form-control" required>
                        <option value="Masculino" {{ $cliente->genero == 'Masculino' ? 'selected' : '' }}>Masculino</option>
                        <option value="Femenino" {{ $cliente->genero == 'Femenino' ? 'selected' : '' }}>Femenino</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="fechaNacimiento">Fecha de Nacimiento</label>
                    <input type="date" name="fechaNacimiento" id="fechaNacimiento" class="form-control" value="{{ $cliente->fechaNacimiento }}">
                </div>

                <div class="form-group">
                    <label for="formaPago">Forma de Pago</label>
                    <input type="text" name="formaPago" id="formaPago" class="form-control" value="{{ $cliente->formaPago }}">
                </div>

                <div class="form-group">
                    <label for="estadoCliente">Estado del Cliente</label>
                    <select name="estadoCliente" id="estadoCliente" class="form-control" required>
                        <option value="activo" {{ $cliente->estadoCliente == 'activo' ? 'selected' : '' }}>Activo</option>
                        <option value="inactivo" {{ $cliente->estadoCliente == 'inactivo' ? 'selected' : '' }}>Inactivo</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Actualizar Cliente</button>
                <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
            </form>
        </div>
    </div>
@stop
