<?php

namespace App\Http\Controllers;

use App\Models\Visita;
use App\Models\Mascota;
use Illuminate\Http\Request;

class VisitaController extends Controller
{
    public function index() {
        $visitas = Visita::with('mascota')->get();
        return view('visitas.index', compact('visitas'));
    }

    public function create() {
        $mascotas = Mascota::all();
        return view('visitas.create', compact('mascotas'));
    }

    public function store(Request $request) {
        Visita::create($request->all());
        return redirect()->route('visitas.index');
    }

    public function edit(Visita $visita) {
        $mascotas = Mascota::all();
        return view('visitas.edit', compact('visita', 'mascotas'));
    }

    public function update(Request $request, Visita $visita) {
        $visita->update($request->all());
        return redirect()->route('visitas.index');
    }

    public function destroy(Visita $visita) {
        $visita->delete();
        return redirect()->route('visitas.index');
    }
}
