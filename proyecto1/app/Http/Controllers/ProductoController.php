<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Categoria;
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
        $categorias = \App\Models\Categoria::all();
        return view('productos.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //dd($request);
        $dataProducto=$request->validate([
            "nombre"=>['required', 'string', 'max:255' ],
            "precio" => ['required', 'numeric', 'min:0'],
            "stock" => ['required', 'integer', 'min:0'],
            "descripcion"=>['required', 'string', 'max:255'],
            "categoria_id" => ['required', 'exists:categorias,id'],
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
        $categorias = Categoria::all();
        return view('productos.edit', compact('producto', 'categorias'));
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
            "categoria_id" => ['required', 'exists:categorias,id'],
        ]);
        $producto->update($dataUpdate);
        return redirect()->route('productos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('productos.index')->with('success', 'Producto eliminado correctamente.');
    }
}
