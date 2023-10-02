<?php

namespace App\Http\Controllers;

use App\Models\producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productos = producto::all();
        return view('producto.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $producto = new producto;
        $producto->NOMBRE = $request->input('nombre');
        $producto->DESCRIPCION = $request->input('descripcion');
        $producto->ESTADO = 1;
        $producto->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $producto =producto::find($id);
        $producto->NOMBRE = $request->input('nombre');
        $producto->DESCRIPCION = $request->input('descripcion');
        $producto->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $producto =producto::find($id);
        $producto->delete();
        return redirect()->back();
    }
}
