@extends('layouts.app')

@section('title', 'Indicador ' . $indicator->nombreIndicador)

@section('content')
    <div class="container">
        <h1>{{ $indicator->nombreIndicador }}</h1>
        <table class="table">
            <tbody>
                <tr>
                    <td>Código:</td>
                    <td>{{ $indicator->codigoIndicador }}</td>
                </tr>
                <tr>
                    <td>Unidad de Medida:</td>
                    <td>{{ $indicator->unidadMedidaIndicador }}</td>
                </tr>
                <tr>
                    <td>Valor:</td>
                    <td>{{ $indicator->valorIndicador }}</td>
                </tr>
                <tr>
                    <td>Fecha:</td>
                    <td>{{ $indicator->fechaIndicador }}</td>
                </tr>
                <tr>
                    <td>Tiempo:</td>
                    <td>{{ $indicator->tiempoIndicador }}</td>
                </tr>
                <tr>
                    <td>Origen:</td>
                    <td>{{ $indicator->origenIndicador }}</td>
                </tr>
            </tbody>
        </table>
        <a href="{{ route('indicators.edit', $indicator->id) }}" class="btn btn-warning">Editar</a>
        <form action="{{ route('indicators.destroy', $indicator->id) }}" method="POST" style="display: inline-block;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
        <a href="{{ route('indicators.index') }}" class="btn btn-secondary">Volver a la Lista de Indicadores</a>
    </div>
@endsection