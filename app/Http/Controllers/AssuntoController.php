<?php

namespace App\Http\Controllers;

use App\Models\Assunto;
use Illuminate\Http\Request;

class AssuntoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Assunto::all();
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'materia_id' => 'required|exists:materias,id',
        ]);

        $assunto = Assunto::create([
            'nome' => $validated['nome'],
            'materia_id' => $validated['materia_id']
        ]);

        return response()->json($assunto, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Assunto $assunto)
    {
        return $assunto::find($assunto->id);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Assunto $assunto)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
            'materia_id' => 'required|exists:materias,id',
        ]);

        $assunto->update([
            'nome' => $validated['nome'],
            'materia_id' => $validated['materia_id']
        ]);

        return response()->json(['message' => 'Assunto updated successfully'], 200);
    }

    
    public function destroy(Assunto $assunto)
    {
        //
    }
}
