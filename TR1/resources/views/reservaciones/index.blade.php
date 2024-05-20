@extends('layouts.admin')

@section('main-content')
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800">Reservaciones</h1>

        <div class="card shadow mb-4">
            <div class="card-body">
                <a href="{{ route('reservaciones.create') }}" class="btn btn-primary mb-4">Crear Nueva Reservación</a>

                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Número de Reservación</th>
                            <th>Número de Promoción</th>
                            <th>DNI del Cliente</th>
                            <th>Pago Adelantado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($reservaciones as $reservacione)
                            <tr>
                                <td>{{ $reservacione->nro_reservacion }}</td>
                                <td>{{ $reservacione->nro_promocion }}</td>
                                <td>{{ $reservacione->cliente_dni }}</td>
                                <td>{{ $reservacione->pago_adelantado }}</td>
                                <td>
                                    <a href="{{ route('reservaciones.show', $reservacione) }}" class="btn btn-info">Ver</a>
                                    <a href="{{ route('reservaciones.edit', $reservacione) }}" class="btn btn-warning">Editar</a>
                                    <form action="{{ route('reservaciones.destroy', $reservacione) }}" method="POST" style="display:inline;">

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
        </div>
    </div>
@endsection
