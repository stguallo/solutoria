@extends('layouts.app')

@section('title', 'Editar Indicador')

@section('content')
    <div class="container">
        <h1>Editar Indicador</h1>
        <form action="{{ route('indicators.update', $indicator->id) }}" method="POST" class="was-validated">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombreIndicador">Nombre del Indicador</label>
                <input type="text" class="form-control @error('nombreIndicador') is-invalid @enderror" id="nombreIndicador" name="nombreIndicador" value="{{ $indicator->nombreIndicador }}" required>
                @error('nombreIndicador')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="codigoIndicador">CÃ³digo del Indicador</label>
                <input type="text" class="form-control @error('codigoIndicador') is-invalid @enderror" id="codigoIndicador" name="codigoIndicador" value="{{ $indicator->codigoIndicador }}" required>
                @error('codigoIndicador')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="unidadMedidaIndicador">Unidad de Medida del Indicador</label>
                <input type="text" class="form-control @error('unidadMedidaIndicador') is-invalid @enderror" id="unidadMedidaIndicador" name="unidadMedidaIndicador" value="{{ $indicator->unidadMedidaIndicador }}" required>
                @error('unidadMedidaIndicador')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="valorIndicador">Valor del Indicador</label>
                <input type="number" class="form-control @error('valorIndicador') is-invalid @enderror" id="valorIndicador" name="valorIndicador" value="{{ $indicator->valorIndicador }}" required>
                @error('valorIndicador')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="fechaIndicador">Fecha del Indicador</label>
                <input type="date" class="form-control @error('fechaIndicador') is-invalid @enderror" id="fechaIndicador" name="fechaIndicador" value="{{ $indicator->fechaIndicador }}" required>
                @error('fechaIndicador')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="tiempoIndicador">Tiempo del Indicador</label>
                <input type="text" class="form-control @error('tiempoIndicador') is-invalid @enderror" id="tiempoIndicador" name="tiempoIndicador" value="{{ $indicator->tiempoIndicador }}">
                

        </div>
        <div class="form-group">
            <label for="origenIndicador">Origen del Indicador</label>
            <input type="text" class="form-control @error('origenIndicador') is-invalid @enderror" id="origenIndicador" name="origenIndicador" value="{{ $indicator->origenIndicador }}" required>
            @error('origenIndicador')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Guardar cambios</button>
            <a href="{{ route('indicators.index') }}" class="btn btn-secondary">Cancelar</a>
        </div>
    </form>
</div>
@endsection