@extends('layouts.admin')

@section('main-content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">{{ __('Detalle de la Reservación') }}</h1>

        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="form-group">
                    <label for="id">{{ __('ID') }}</label>
                    <p>{{ $reservacione->id }}</p>
                </div>
                <div class="form-group">
                    <label for="nro_reservacion">{{ __('Número de Reservación') }}</label>
                    <p>{{ $reservacione->nro_reservacion }}</p>
                </div>
                <div class="form-group">
                    <label for="nro_promocion">{{ __('Número de Promoción') }}</label>
                    <p>{{ $reservacione->nro_promocion }}</p>
                </div>
                <div class="form-group">
                    <label for="cliente_dni">{{ __('DNI del Cliente') }}</label>
                    <p>{{ $reservacione->cliente_dni }}</p>
                </div>
                <div class="form-group">
                    <label for="pago_adelantado">{{ __('Pago Adelantado') }}</label>
                    <p>{{ $reservacione->pago_adelantado }}</p>
                </div>
                <div class="form-group">
                    <label for="created_at">{{ __('Fecha de Creación') }}</label>
                    <p>{{ $reservacione->created_at }}</p>
                </div>
                <div class="form-group">
                    <label for="updated_at">{{ __('Última Actualización') }}</label>
                    <p>{{ $reservacione->updated_at }}</p>
                </div>
                <a href="{{ route('reservaciones.index') }}" class="btn btn-primary">{{ __('Volver a la Lista') }}</a>
            </div>
        </div>
    </div>
@endsection
