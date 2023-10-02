<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use App\Models\producto;
use App\Models\socio;
use Illuminate\Http\Request;

class clienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $clientes = Cliente::take(100)->get();
        $productos = Producto::all();

        $searchTerm = $request->input('buscar');

        if ($searchTerm) {
            $clientes = Cliente::where('NOMBRES', 'LIKE', "%$searchTerm%")
                ->orWhere('APELLIDOS', 'LIKE', "%$searchTerm%")
                ->orWhere('ID_CLIENTE', 'LIKE', "%$searchTerm%")
                ->take(100) // Limitar los resultados a los primeros 100 registros
                ->get();
        }

        return view('cliente.index', compact('clientes', 'productos'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cliente = new cliente;
        // $cliente->COD_cliente = $request->input('codigo');
        $cliente->NOMBRES = $request->input('nombre');
        $cliente->APELLIDOS = $request->input('apellido');
        $cliente->DIRECCION = $request->input('direccion');
        $cliente->DPI = $request->input('dpi');
        $cliente->TELEFONO = $request->input('telefono');
        $cliente->CORREO = $request->input('correo');
        $cliente->ESTADO = 1;
        $cliente->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(cliente $cliente)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $cliente =cliente::find($id);
        $cliente->NOMBRES = $request->input('nombre');
        $cliente->APELLIDOS = $request->input('apellido');
        $cliente->DIRECCION = $request->input('direccion');
        $cliente->DPI = $request->input('dpi');
        $cliente->TELEFONO = $request->input('telefono');
        $cliente->CORREO = $request->input('correo');
        $cliente->ESTADO = 1;
        $cliente->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $cliente =cliente::find($id);
        $cliente->delete();
        return redirect()->back();
    }

}
