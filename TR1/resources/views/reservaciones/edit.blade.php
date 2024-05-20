@extends('layouts.admin')

@section('main-content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">{{ __('Editar Reservación') }}</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="{{ route('reservaciones.update', $reservacione) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nro_reservacion">{{ __('Número de Reservación') }}</label>
                        <input type="text" class="form-control" id="nro_reservacion" name="nro_reservacion" value="{{ $reservacione->nro_reservacion }}" required>
                    </div>
                    <div class="form-group">
                        <label for="nro_promocion">{{ __('Número de Promoción') }}</label>
                        <input type="text" class="form-control" id="nro_promocion" name="nro_promocion" value="{{ $reservacione->nro_promocion }}" required>
                    </div>
                    <div class="form-group">
                        <label for="cliente_dni">{{ __('DNI del Cliente') }}</label>
                        <select class="form-control" id="cliente_dni" name="cliente_dni" required>
                            @foreach($clientes as $cliente)
                                <option value="{{ $cliente->dni }}" {{ $reservacione->cliente_dni == $cliente->dni ? 'selected' : '' }}>
                                    {{ $cliente->dni }} - {{ $cliente->nombre }} {{ $cliente->apellido_paterno }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pago_adelantado">{{ __('Pago Adelantado') }}</label>
                        <input type="number" class="form-control" id="pago_adelantado" name="pago_adelantado" value="{{ $reservacione->pago_adelantado }}" step="0.01" required>
                    </div>
                    <button type="submit" class="btn btn-primary">{{ __('Actualizar Reservación') }}</button>
                </form>
            </div>
        </div>
    </div>
@endsection
