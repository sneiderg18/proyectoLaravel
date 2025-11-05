<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = Producto::all();
        return view('productos.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Productos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        $dataProducto=$request->validate([
            "nombre"=>['required', 'string', 'max:255' ],
            "precio"=>['required', 'int', 'max:255'],
            "stock"=>['required', 'int', 'max:255'],
            "descripcion"=>['required', 'string', 'max:255'],
        ]);
        Producto::create($dataProducto);
        return redirect()->route("productos.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(producto $producto)
    {
        return view('producto.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(producto $producto)
    {
        return view('productos.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        $dataUpdate=$request->validate([
            "nombre"=>['required', 'string', 'max:255' ],
            "precio"=>['required', 'numeric', 'min:0'],
            "stock"=>['required', 'integer', 'min:0'],
            "descripcion"=>['nullable', 'string'],
        ]);
        $producto->update($dataUpdate);
        return redirect()->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
