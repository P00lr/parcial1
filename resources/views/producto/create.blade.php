
@extends('adminlte::page')

@section('title', 'Crear producto')

@section('content_header')
    <h1>Crear producto</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('productos.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" name="nombre" id="nombre" class="form-control 
                                            
                            @error('nombre')
                                is-invalid 
                            @enderror" value="{{ old('nombre') }}">
        
                            @error('nombre')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
        
                        </div>

                        <div class="form-group">
                            <label for="cantidad">Cantidad:</label>
                            <input type="number" name="cantidad" id="cantidad" class="form-control 
                                            
                            @error('cantidad')
                                is-invalid 
                            @enderror" value="{{ old('cantidad') }}">
        
                            @error('cantidad')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
        
                        </div>

                        <div class="form-group">
                            <label for="precio">Precio:</label>
                            <input type="number" name="precio" id="precio" class="form-control 
                                            
                            @error('precio')
                                is-invalid 
                            @enderror" value="{{ old('precio') }}">
        
                            @error('precio')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
        
                        </div>

                        <div class="form-group">
                            <label for="descripcion">Descripcion:</label>
                            <input type="text" name="descripcion" id="descripcion" class="form-control 
                                            
                            @error('descripcion')
                                is-invalid 
                            @enderror" value="{{ old('descripcion') }}">
        
                            @error('descripcion')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
        
                        </div>
                    </div>  
                     
                     
                        



                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="marca">Marca:</label>
                            <input type="text" name="marca" id="marca" class="form-control 
                                            
                            @error('marca')
                                is-invalid 
                            @enderror" value="{{ old('marca') }}">
        
                            @error('marca')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
        
                        </div>

                        <div class="form-group">
                            <label for="agregado_fecha">Fecha de ingreso:</label>
                            <input type="date" name="agregado_fecha" id="agregado_fecha" class="form-control 
                                            
                            @error('agregado_fecha')
                                is-invalid 
                            @enderror" value="{{ old('agregado_fecha') }}">
        
                            @error('agregado_fecha')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
        
                        </div>

                        <div class="form-group">
                            <label for="fecha_vencimiento">Fecha de vencimiento:</label>
                            <input type="date" name="fecha_vencimiento" id="fecha_vencimiento" class="form-control 
                                            
                            @error('fecha_vencimiento')
                                is-invalid 
                            @enderror" value="{{ old('fecha_vencimiento') }}">
        
                            @error('fecha_vencimiento')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
        
                        </div>

                        <div class="form-group">
                            <label for="categoria">Categoria:</label>
                            <input type="text" name="categoria" id="categoria" class="form-control 
                                            
                            @error('categoria')
                                is-invalid 
                            @enderror" value="{{ old('categoria') }}">
        
                            @error('categoria')
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
