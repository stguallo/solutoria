@extends('layouts.app')

@section('title', 'Crear Indicador')

@section('content')
    <div class="container">
        <h1>Crear Indicador</h1>
        <form method="POST" action="{{ route('indicators.store') }}">
            @csrf
            <div class="form-group">
                <label for="nombreIndicador">Nombre del Indicador</label>
                <input type="text" class="form-control @error('nombreIndicador') is-invalid @enderror" id="nombreIndicador" name="nombreIndicador" value="{{ old('nombreIndicador') }}" required>
                @error('nombreIndicador')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="codigoIndicador">CÃ³digo del Indicador</label>
                <input type="text" class="form-control @error('codigoIndicador') is-invalid @enderror" id="codigoIndicador" name="codigoIndicador" value="{{ old('codigoIndicador') }}" required>
                @error('codigoIndicador')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="unidadMedidaIndicador">Unidad de Medida del Indicador</label>
                <input type="text" class="form-control @error('unidadMedidaIndicador') is-invalid @enderror" id="unidadMedidaIndicador" name="unidadMedidaIndicador" value="{{ old('unidadMedidaIndicador') }}" required>
                @error('unidadMedidaIndicador')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="valorIndicador">Valor del Indicador</label>
                <input type="text" class="form-control @error('valorIndicador') is-invalid @enderror" id="valorIndicador" name="valorIndicador" value="{{ old('valorIndicador') }}" required>
                @error('valorIndicador')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="fechaIndicador">Fecha del Indicador</label>
                <input type="date" class="form-control @error('fechaIndicador') is-invalid @enderror" id="fechaIndicador" name="fechaIndicador" value="{{ old('fechaIndicador') }}" required>
                @error('fechaIndicador')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="tiempoIndicador">Tiempo del Indicador</label>
                <input type="text" class="form-control @error('tiempoIndicador') is-invalid @enderror" id="tiempoIndicador" name="tiempoIndicador" value="{{ old('tiempoIndicador') }}" >
                
            </div>
            <div class="form-group">
                <label for="origenIndicador">Origen del Indicador</label>
                <input type="text" class="form-control @error('origenIndicador') is-invalid @enderror" id="origenIndicador" name="origenIndicador" value="{{ old('origenIndicador') }}" required>
                @error('origenIndicador')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
            <a href="{{ route('indicators.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection