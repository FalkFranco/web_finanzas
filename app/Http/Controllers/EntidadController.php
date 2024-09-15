<?php

namespace App\Http\Controllers;

use App\Models\Entidad;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class EntidadController extends Controller
{
    public function index()
    {
        return view('abm.entidades.index');
    }

    public function getData(Request $request)
    {
        $entidades = Entidad::with('tipoEntidad');

        return DataTables::of($entidades)
            ->addColumn('action', function ($entidad) {
                return view('abm.entidades.action_buttons', compact('entidad'))->render();
            })
            ->filterColumn('tipo_entidad.nombre', function ($query, $keyword) {
                $query->whereHas('tipoEntidad', function ($q) use ($keyword) {
                    $q->where('nombre', 'like', "%{$keyword}%");
                });
            })
            ->rawColumns(['action'])
            ->make(true);
    }
    public function create()
    {
        // Implementar lógica para mostrar formulario de creación
    }

    public function store(Request $request)
    {
        // Implementar lógica para guardar una nueva entidad
    }

    public function edit($id)
    {
        // Implementar lógica para mostrar formulario de edición
    }

    public function update(Request $request, $id)
    {
        // Implementar lógica para actualizar una entidad
    }

    public function destroy($id)
    {
        // Implementar lógica para eliminar una entidad
    }
}
