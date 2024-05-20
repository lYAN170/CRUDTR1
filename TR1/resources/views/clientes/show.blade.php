@extends('layouts.admin')

@section('main-content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">{{ __('Ver Cliente') }}</h1>

        <div class="card shadow mb-4">
            <div class="card-body">
                <div class="form-group">
                    <label for="dni">{{ __('DNI') }}</label>
                    <input type="text" class="form-control" id="dni" value="{{ $cliente->dni }}" readonly>
                </div>
                <div class="form-group">
                    <label for="nombres">{{ __('Nombres') }}</label>
                    <input type="text" class="form-control" id="nombres" value="{{ $cliente->nombres }}" readonly>
                </div>
                <div class="form-group">
                    <label for="apellido_paterno">{{ __('Apellido Paterno') }}</label>
                    <input type="text" class="form-control" id="apellido_paterno" value="{{ $cliente->apellido_paterno }}" readonly>
                </div>
                <div class="form-group">
                    <label for="apellido_materno">{{ __('Apellido Materno') }}</label>
                    <input type="text" class="form-control" id="apellido_materno" value="{{ $cliente->apellido_materno }}" readonly>
                </div>
                <div class="form-group">
                    <label for="direccion">{{ __('Direccion') }}</label>
                    <input type="text" class="form-control" id="direccion" value="{{ $cliente->direccion }}" readonly>
                </div>
                <div class="form-group">
                    <label for="ciudad">{{ __('Ciudad') }}</label>
                    <input type="text" class="form-control" id="ciudad" value="{{ $cliente->ciudad }}" readonly>
                </div>

                <a href="{{ route('clientes.index') }}" class="btn btn-secondary">{{ __('Volver') }}</a>
            </div>
        </div>
    </div>
@endsection
