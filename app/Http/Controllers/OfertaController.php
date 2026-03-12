<?php

namespace App\Http\Controllers;

use App\Models\Oferta;
use Illuminate\Http\Request;

class OfertaController extends Controller
{
    public function index()
    {
        $ofertas = Oferta::all();
        return view('ofertas.index', compact('ofertas'));
    }

    public function create()
    {
        // Esta es la función que carga la página en blanco que ves ahora
        return view('ofertas.create');
    }

    public function store(Request $request)
    {
        Oferta::create($request->all());
        return redirect()->route('ofertas.index');
    }

    public function edit(Oferta $oferta)
    {
        return view('ofertas.edit', compact('oferta'));
    }

    public function update(Request $request, Oferta $oferta)
    {
        $oferta->update($request->all());
        return redirect()->route('ofertas.index');
    }

    public function destroy(Oferta $oferta)
    {
        $oferta->delete();
        return redirect()->route('ofertas.index');
    }
}