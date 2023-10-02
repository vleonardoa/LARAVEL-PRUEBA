<?php

namespace App\Http\Controllers;

use App\Models\socio;
use Illuminate\Http\Request;

class SocioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(socio $socio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(socio $socio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $cliente = socio::where('ID_CLIENTE', $id)->first();
        // Si no se encontró un socio existente, crea uno nuevo
        if (!$cliente) {
            $socioa = new Socio;
            $socioa->ID_CLIENTE = $id;
            $socioa->DETALLE = 'Nuevo socio agregado';
            $socioa->ESTADO = 1;
            $socioa->save();
        } else {
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(socio $socio )
    {
        //
    }
}
