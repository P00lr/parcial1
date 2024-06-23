
@extends('adminlte::page')

@section('title', 'Crear Empleado')

@section('content_header')
    <h1>Registrar Nuevo Empleado</h1>
@stop
@section('content')
    @if(session('success'))
        <div class="alert alert-success" id="success-alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <form action="{{ route('empleados.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nombreCompleto">Nombre Completo:</label>
                            <input type="text" name="nombreCompleto" id="nombreCompleto" class="form-control 
                                            
                            @error('nombreCompleto')
                                is-invalid 
                            @enderror" value="{{ old('nombreCompleto') }}">
        
                            @error('nombreCompleto')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
        
                        </div>
        
                        <div class="form-group">
                            <label for="ci">Cedula de identidad:</label>
                            <input type="text" name="ci" id="ci" class="form-control 
                                            
                            @error('ci') 
                                is-invalid 
                            @enderror" value="{{ old('ci') }}">
        
                            @error('ci')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror               
                        </div>
        
                        <div class="form-group">
                            <label for="telefono">Teléfono:</label>
                            <input type="text" name="telefono" id="telefono" class="form-control 
        
                            @error('telefono') 
                                is-invalid 
                            @enderror" value="{{ old('telefono') }}">
        
                            @error('telefono')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror               
                        </div>
        
                        <div class="form-group">
                            <label for="fechaNacimiento">Fecha de nacimiento:</label>
                            <input type="date" name="fechaNacimiento" id="fechaNacimiento" class="form-control 
                            
                            @error('fechaNacimiento') 
                                is-invalid 
                            @enderror" value="{{ old('fechaNacimiento') }}">
        
                            @error('fechaNacimiento')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email" >Correo Electrónico:</label>
                            <input type="email" name="email" id="email" class="form-control
                            @error('email') 
                                 is-invalid 
                            @enderror" value="{{ old('email') }}">
        
                            @error('email')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror   
                                                                                            
                        </div>
                        <div class="form-group">
                            <label for="direccion">Dirección:</label>
                            <input type="text" name="direccion" id="direccion" class="form-control 
                                            
                            @error('direccion') 
                                is-invalid 
                            @enderror" value="{{ old('direccion') }}">
                            
                            @error('direccion')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror                    
                        </div>
                        <div class="form-group">
                            <label for="cargo">Cargo:</label>
                            <input type="text" name="cargo" id="cargo" class="form-control 
                                            
                            @error('cargo') 
                                is-invalid 
                            @enderror" value="{{ old('cargo') }}">
                            
                            @error('cargo')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror                 
                        </div>
                        <div class="form-group">
                            <label for="salario">Salario:</label>
                            <input type="text" name="salario" id="salario" class="form-control 
                                            
                            @error('salario') 
                                is-invalid 
                            @enderror" value="{{ old('salario') }}">
                            
                            @error('salario')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror  
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div>
    </div>
@stop

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const alert = document.getElementById('success-alert');
        if (alert) {
            setTimeout(() => {
                alert.style.display = 'none';
            }, 3000);
        }
    });
</script>