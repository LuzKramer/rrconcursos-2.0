<?php

namespace App\Http\Controllers;

use App\Models\Banca;
use Illuminate\Http\Request;

class BancaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Banca::all();
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        $banca = Banca::create([
            'nome' => $validated['nome']
        ]);

        return response()->json($banca, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Banca $banca)
    {
        return $banca::find($banca->id);
    }


    public function update(Request $request, Banca $banca)
    {
         $validated = $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        $banca->update([
            'nome' => $validated['nome']
        ]);

        return response()->json(['message' => 'Banca updated successfully'], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banca $banca){
        

    }
}
