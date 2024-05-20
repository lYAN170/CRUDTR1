@extends('layouts.admin')

@section('main-content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">{{ __('Agregar Promoción') }}</h1>

        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="{{ route('promociones.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nro_promocion">{{ __('Número de Promoción') }}</label>
                        <input type="text" class="form-control" id="nro_promocion" name="nro_promocion" required>
                    </div>
                    <div class="form-group">
                        <label for="tipo_viaje">{{ __('Tipo de Viaje') }}</label>
                        <input type="text" class="form-control" id="tipo_viaje" name="tipo_viaje" required>
                    </div>
                    <div class="form-group">
                        <label for="costo">{{ __('Costo') }}</label>
                        <input type="number" class="form-control" id="costo" name="costo" required>
                    </div>
                    <button type="submit" class="btn btn-primary">{{ __('Agregar Promoción') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection
