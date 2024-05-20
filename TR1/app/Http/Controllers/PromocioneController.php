<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promocione;

class PromocioneController extends Controller
{
    public function index()
    {
        $promociones = Promocione::all();
        return view('promociones.index', compact('promociones'));
    }

    public function create()
    {
        return view('promociones.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nro_promocion' => 'required|string|max:200|unique:promociones',
            'tipo_viaje' => 'required|string|max:200',
            'costo' => 'required|numeric|min:0',
        ]);

        Promocione::create($request->all());

        return redirect()->route('promociones.index')->with('success', 'Promoción creada exitosamente.');
    }

    public function show(Promocione $promocione)
    {
        return view('promociones.show', compact('promocione'));
    }

    public function edit(Promocione $promocione)
    {
        return view('promociones.edit', compact('promocione'));
    }

    public function update(Request $request, Promocione $promocione)
    {
        $request->validate([
            'nro_promocion' => 'required|string|max:200|unique:promociones,nro_promocion,' . $promocione->nro_promocion . ',nro_promocion',
            'tipo_viaje' => 'required|string|max:200',
            'costo' => 'required|numeric|min:0',
        ]);

        $promocione->update($request->all());

        return redirect()->route('promociones.index')->with('success', 'Promoción actualizada correctamente.');
    }

    public function destroy(Promocione $promocione)
    {
        $promocione->delete();

        return redirect()->route('promociones.index')->with('success', 'Promoción eliminada exitosamente.');
    }
}
