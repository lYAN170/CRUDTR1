@extends('layouts.admin')

@section('main-content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">{{ __('Lista de Promociones') }}</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <a href="{{ route('promociones.create') }}" class="btn btn-primary mb-4">{{ __('Agregar Promoción') }}</a>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Número de Promoción</th>
                    <th>Tipo de Viaje</th>
                    <th>Costo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($promociones as $promocion)
                    <tr>
                        <td>{{ $promocion->nro_promocion }}</td>
                        <td>{{ $promocion->tipo_viaje }}</td>
                        <td>{{ $promocion->costo }}</td>
                        <td>
                            <a href="{{ route('promociones.edit', $promocion->nro_promocion) }}" class="btn btn-warning">{{ __('Editar') }}</a>
                            <form action="{{ route('promociones.destroy', $promocion->nro_promocion) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">{{ __('Eliminar') }}</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
