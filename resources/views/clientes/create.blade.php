@extends('adminlte::page')

@section('title', 'Crear Cliente')

@section('content_header')
    <h1 class="text-center">Registrar Nuevo Cliente</h1>
@stop
@section('content')
    @if(session('success')){{-- para el mensaje de registrado con exito --}}
        <div class="alert alert-success" id="success-alert">
             {{ session('success') }}
     </div>
    @endif
    <div class="card">
        <div class="card-body">
            <form action="{{ route('clientes.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nombreCompleto">Nombre Completo:</label>
                            <input type="text" name="nombreCompleto" id="nombreCompleto" class="form-control 
                                            
                            @error('nombreCompleto'){{-- para que no se borro lo que escribio si algo sale mal --}}
                                is-invalid 
                            @enderror" value="{{ old('nombreCompleto') }}">
        
                            @error('nombreCompleto')
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
                            <label for="email" >Email:</label>
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
                    </div>
                    
                    <div class="col-md-6">
                        
                        <div class="form-group">
                            <label for="genero">Género</label>
                            <select name="genero" id="genero" class="form-control" required>
                                <option value="Masculino">Masculino</option>
                                <option value="Femenino">Femenino</option>
                            </select>
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
        
                        <div class="form-group">
                            <label for="formaPago">Forma de pago:</label>
                            <select name="formaPago" id="formaPago" class="form-control" required>
                                <option value="Efectivo">Efectivo</option>
                                <option value="Debito">Debito</option>
                                <option value="Credito">Credito</option>
                            </select>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Guardar Cliente</button>
                <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Cancelar</a>
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
