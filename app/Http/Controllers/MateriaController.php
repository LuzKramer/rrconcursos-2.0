<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{

    public function index()
    {
        return Materia::all();
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        $materia = Materia::create([
            'nome' => $validated['nome']
        ]);

        return response()->json(['message' => 'Materia criada com sucesso'], 201);
    }


    public function show(Materia $materia)
    {
        return $materia::find($materia->id);
    }


    public function update(Request $request, Materia $materia)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        $materia->update([
            'nome' => $validated['nome']
        ]);
        return response()->json(['message' => 'Materia atualizada com sucesso'], 200);
    }


    public function destroy(Materia $materia)
    {
        
    }
}
