@extends('adminlte::page')

@section('title', 'Detalles del Cliente')

@section('content_header')
    <h1>Detalles del Cliente</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="form-group">
                <label for="nombreCompleto">Nombre Completo:</label>
                <p>{{ $cliente->nombreCompleto }}</p>
            </div>

            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <p>{{ $cliente->telefono }}</p>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <p>{{ $cliente->email }}</p>
            </div>

            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <p>{{ $cliente->direccion }}</p>
            </div>

            <div class="form-group">
                <label for="genero">Género:</label>
                <p>{{ $cliente->genero }}</p>
            </div>

            <div class="form-group">
                <label for="fechaNacimiento">Fecha de Nacimiento:</label>
                <p>{{ $cliente->fechaNacimiento }}</p>
            </div>

            <div class="form-group">
                <label for="formaPago">Forma de Pago:</label>
                <p>{{ $cliente->formaPago }}</p>
            </div>

            <div class="form-group">
                <label for="estadoCliente">Estado del Cliente:</label>
                <p>{{ $cliente->estadoCliente }}</p>
            </div>

            <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-primary">Editar</a>
            <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Volver</a>
        </div>
    </div>
@stop
