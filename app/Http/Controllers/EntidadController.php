<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entidad;

class EntidadController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index()
    {
        //
        $entidades = Entidad::all(); // Obtener todas las entidades
        return view('abm.entidades.index', compact('entidades')); // Pasar las entidades a la vista
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('abm.entidades.create'); // Mostrar el formulario de creación
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        request()->validate([ // Validar los campos
            'nombre' => 'required|string|max:255',
            'tipo_entidad_id' => 'required|exists:tipo_entidades,id',
        ]);

        Entidad::create($request->all()); // Crear la entidad
        return redirect()->route('abm.entidades.index'); // Redireccionar a la lista de entidades
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return view('abm.entidades.show', compact('entidad')); // Pasar la entidad a la vista
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        return view('abm.entidades.edit', compact('entidad')); // Pasar la entidad a la vista
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

    }
}
