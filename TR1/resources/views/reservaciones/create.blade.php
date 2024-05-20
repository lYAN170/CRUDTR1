@extends('layouts.admin')

@section('main-content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Crear Reservación</h1>

        <div class="card shadow mb-4">
            <div class="card-body">
                <form method="POST" action="{{ route('reservaciones.store') }}">
                    @csrf
                    <div class="form-group">
                        <label for="nro_reservacion">Número de Reservación</label>
                        <input type="text" class="form-control" id="nro_reservacion" name="nro_reservacion" required>
                    </div>
                    <div class="form-group">
                        <label for="nro_promocion">Número de Promoción</label>
                        <select class="form-control" id="nro_promocion" name="nro_promocion" required>
                            @foreach($promociones as $promocion)
                                <option value="{{ $promocion->nro_promocion }}">{{ $promocion->nro_promocion }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="cliente_dni">DNI del Cliente</label>
                        <select class="form-control" id="cliente_dni" name="cliente_dni" required>
                            @foreach($clientes as $cliente)
                                <option value="{{ $cliente->dni }}">{{ $cliente->dni }} - {{ $cliente->nombres }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pago_adelantado">Pago Adelantado</label>
                        <input type="number" class="form-control" id="pago_adelantado" name="pago_adelantado" required min="0" step="0.01">
                    </div>
                    <button type="submit" class="btn btn-primary">Crear Reservación</button>
                    <a href="{{ route('reservaciones.index') }}" class="btn btn-secondary">Regresar</a>
                </form>
            </div>
        </div>
    </div>
@endsection
