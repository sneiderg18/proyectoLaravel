<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vendedor;

class VendedorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vendedores = Vendedor::all();
        return view('vendedores.index', compact('vendedores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('vendedores.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dataVendedor = $request->validate([
            "nombre" => ['required', 'string', 'max:255'],
            "cargo" => ['required', 'string', 'max:255'],
            "telefono" => ['required', 'string', 'max:255'],
        ]);

        Vendedor::create($dataVendedor);
        return redirect()->route("vendedores.index");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vendedor $vendedor)
    {
        // Cambiado $vend → $vendedor para coincidir con el parámetro
        dd($vendedor);
        return view('vendedores.edit', compact('vendedor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vendedor $vendedor)
    {
        dd($request);
        $dataUpdate = $request->validate([
            "nombre" => ['required', 'string', 'max:255'],
            "cargo" => ['required', 'string', 'max:255'],
            "telefono" => ['required', 'string', 'max:255'],
        ]);

        $vendedor->update($dataUpdate);
        return redirect()->route('vendedores.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vendedor $vendedor)
    {
        $vendedor->delete();
        return redirect()->route('vendedores.index');
    }
}
