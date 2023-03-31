@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Indicadores</h1>
        <a href="{{ route('indicators.create') }}" class="btn btn-success">Crear Nuevo Indicador</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>CÃ³digo</th>
                    <th>Unidad de Medida</th>
                    <th>Valor</th>
                    <th>Fecha</th>
                    <th>Tiempo</th>
                    <th>Origen</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($indicators as $indicator)
                    <tr>
                        <td>{{ $indicator->id }}</td>
                        <td>{{ $indicator->nombreIndicador }}</td>
                        <td>{{ $indicator->codigoIndicador }}</td>
                        <td>{{ $indicator->unidadMedidaIndicador }}</td>
                        <td>{{ $indicator->valorIndicador }}</td>
                        <td>{{ $indicator->fechaIndicador }}</td>
                        <td>{{ $indicator->tiempoIndicador }}</td>
                        <td>{{ $indicator->origenIndicador }}</td>
                        <td>
                            <a href="{{ route('indicators.show', $indicator->id) }}" class="btn btn-primary">Ver</a>
                            <a href="{{ route('indicators.edit', $indicator->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('indicators.destroy', $indicator->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                                
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
@endsection