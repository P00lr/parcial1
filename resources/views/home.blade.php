@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1>Resumen</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fas fa-users"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total Clientes</span>
                    <span class="info-box-number">{{ $totalClientes }}</span>
                    <span class="info-box-description">Últimos registrados:</span>
                    <ul class="info-box-list">
                        @foreach($ultimosClientes as $cliente)
                            <li>{{ $cliente->nombreCompleto }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="info-box">
                <span class="info-box-icon bg-success"><i class="fas fa-user-tie"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total Empleados</span>
                    <span class="info-box-number">{{ $totalEmpleados }}</span>
                    <span class="info-box-description">Últimos registrados:</span>
                    <ul class="info-box-list">
                        @foreach($ultimosEmpleados as $empleado)
                            <li>{{ $empleado->nombreCompleto }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="info-box">
                <span class="info-box-icon bg-warning"><i class="fas fa-shopping-cart"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total Productos</span>
                    <span class="info-box-number">{{ $totalProductos }}</span>
                    <span class="info-box-description">Últimos agregados:</span>
                    <ul class="info-box-list">
                        @foreach($ultimosProductos as $producto)
                            <li>{{ $producto->nombre }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@stop

