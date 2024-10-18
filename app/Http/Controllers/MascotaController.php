<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use App\Models\Dueno;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    public function index() {
        $mascotas = Mascota::all();
        return view('mascotas.index', compact('mascotas'));
    }

    public function create() {
        $duenos = Dueno::all();
        return view('mascotas.create', compact('duenos'));
    }

    public function store(Request $request) {
        Mascota::create($request->all());
        return redirect()->route('mascotas.index');
    }

    public function edit(Mascota $mascota) {
        $duenos = Dueno::all();
        return view('mascotas.edit', compact('mascota', 'duenos'));
    }

    public function update(Request $request, Mascota $mascota) {
        $mascota->update($request->all());
        return redirect()->route('mascotas.index');
    }

    public function destroy(Mascota $mascota) {
        $mascota->delete();
        return redirect()->route('mascotas.index');
    }
}
