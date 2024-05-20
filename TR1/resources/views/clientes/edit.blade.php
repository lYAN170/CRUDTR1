@extends('layouts.admin')

@section('main-content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">{{ __('Editar Cliente') }}</h1>

        <div class="card shadow mb-4">
            <div class="card-body">
                <form method="POST" action="{{ route('clientes.update', $cliente->dni) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="dni">DNI</label>
                        <input type="text" class="form-control" id="dni" name="dni" value="{{ $cliente->dni }}" required>
                    </div>
                    <div class="form-group">
                        <label for="nombres">Nombres</label>
                        <input type="text" class="form-control" id="nombres" name="nombres" value="{{ $cliente->nombres }}" required>
                    </div>
                    <div class="form-group">
                        <label for="apellido_paterno">Apellido Paterno</label>
                        <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno" value="{{ $cliente->apellido_paterno }}" required>
                    </div>
                    <div class="form-group">
                        <label for="apellido_materno">Apellido Materno</label>
                        <input type="text" class="form-control" id="apellido_materno" name="apellido_materno" value="{{ $cliente->apellido_materno }}" required>
                    </div>
                    <div class="form-group">
                        <label for="direccion">Direccion</label>
                        <input type="text" class="form-control" id="direccion" name="direccion" value="{{ $cliente->direccion }}" required>
                    </div>
                    <div class="form-group">
                        <label for="ciudad">Ciudad</label>
                        <input type="text" class="form-control" id="ciudad" name="ciudad" value="{{ $cliente->ciudad }}" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary mr-2">Actualizar Cliente</button>
                        <a href="{{ route('clientes.index') }}" class="btn btn-secondary">Regresar</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
