@extends('adminlte::page')

@section('title', 'Inicio')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="info-box">
                <span class="info-box-icon bg-info"><i class="fas fa-users"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total Clientes</span>
                    <span class="info-box-number">{{$totalClientes}}</span>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="info-box">
                <span class="info-box-icon bg-success"><i class="fas fa-user-tie"></i></span>
                <div class="info-box-content">
                    <span class="info-box-text">Total de Empleados</span>
                    <span class="info-box-number">{{$totalEmpleados}}</span>
                </div>
            </div>
        </div>
    </div>
@stop
