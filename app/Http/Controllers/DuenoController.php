<?php

namespace App\Http\Controllers;

use App\Models\Dueno;
use Illuminate\Http\Request;

class DuenoController extends Controller
{
    public function index() {
        $duenos = Dueno::all();
        return view('duenos.index', compact('duenos'));
    }

    public function create() {
        return view('duenos.create');
    }

    public function store(Request $request) {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'telefono' => 'nullable|string|max:255', 
        ]);

        Dueno::create($request->all());

        return redirect()->route('duenos.index')->with('success', 'Dueño creado con éxito.');
    }

    public function edit(Dueno $dueno) {
        return view('duenos.edit', compact('dueno'));
    }

    public function update(Request $request, Dueno $dueno) {
        $dueno->update($request->all());
        return redirect()->route('duenos.index')->with('success', 'Dueño actualizado con éxito.');
    }

    public function destroy(Dueno $dueno) {
        $dueno->delete();
        return redirect()->route('duenos.index')->with('success', 'Dueño eliminado con éxito.');
    }
}
