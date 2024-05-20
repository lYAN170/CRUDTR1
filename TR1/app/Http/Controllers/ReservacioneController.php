<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservacione;
use App\Models\Cliente;
use App\Models\Promocione;

class ReservacioneController extends Controller
{
    public function index()
    {
        $reservaciones = Reservacione::all();
        return view('reservaciones.index', compact('reservaciones'));
    }

    public function create()
    {
        $clientes = Cliente::all();
        $promociones = Promocione::all();
        return view('reservaciones.create', compact('clientes', 'promociones'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nro_reservacion' => 'required|string|max:4|unique:reservaciones,nro_reservacion',
            'nro_promocion' => 'required|string|max:4',
            'cliente_dni' => 'required|string|max:8|exists:clientes,dni',
            'pago_adelantado' => 'required|numeric|min:0',
        ]);

        Reservacione::create($request->all());

        return redirect()->route('reservaciones.index')->with('success', 'Reservación creada exitosamente.');
    }

    public function show(Reservacione $reservacione)
    {
        return view('reservaciones.show', compact('reservacione'));
    }

    public function edit($id)
    {
        $reservacione = Reservacione::findOrFail($id);
        $clientes = Cliente::all();
        $promociones = Promocione::all();
        return view('reservaciones.edit', compact('reservacione', 'clientes', 'promociones'));
    }

    public function update(Request $request, $id)
{
    $reservacione = Reservacione::findOrFail($id);
    $request->validate([
        'nro_reservacion' => 'required|string|max:4|unique:reservaciones,nro_reservacion,' . $reservacione->nro_reservacion . ',nro_reservacion',
        'nro_promocion' => 'required|string|max:4',
        'cliente_dni' => 'required|string|max:8|exists:clientes,dni',
        'pago_adelantado' => 'required|numeric|min:0',
    ]);

    $reservacione->update($request->all());

    return redirect()->route('reservaciones.index')->with('success', 'Reservación actualizada correctamente.');
}

    public function destroy($id)
    {
        $reservacione = Reservacione::findOrFail($id);
        $reservacione->delete();

        return redirect()->route('reservaciones.index')->with('success', 'Reservación eliminada exitosamente.');
    }
}
