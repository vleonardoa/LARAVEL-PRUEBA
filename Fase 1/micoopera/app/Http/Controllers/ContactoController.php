<?php

namespace App\Http\Controllers;

use App\Models\contacto;
use App\Models\cliente;
use App\Models\socio;
use Illuminate\Http\Request;
use Psy\Readline\Hoa\Console;

class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contactos = contacto::all();
        return view('contacto.index', compact('contactos'));
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

    }

    /**
     * Display the specified resource.
     */
    public function show(contacto $contacto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contacto $contacto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        $cliente = socio::where('ID_CLIENTE', $id)->first();
        $nuevoID = 0;
        // Si no se encontró un socio existente, crea uno nuevo
        if (!$cliente) {
            $socioa = new Socio;
            $socioa->ID_CLIENTE = $id;
            $socioa->DETALLE = 'Nuevo socio agregado';
            $socioa->ESTADO = 1;
            $socioa->save();

            $nuevoID = $socioa->getKey();
        } else {
            $nuevoID =$cliente->ID_SOCIO;
        }
        $contacto = new Contacto();
        $contacto->ID_USUARIO = 1;
        $contacto->COD_SOCIO = $nuevoID;
        $contacto->ID_PRODUCTO = $request->input('idProducto');
        $contacto->FECHA_PROBABLE = $request->input('fecha');
        $contacto->DETALLE = $request->input('acuerdo');
        $contacto->save();


        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contacto $contacto)
    {
        //
    }
}
