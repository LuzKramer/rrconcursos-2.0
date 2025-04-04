<?php

namespace App\Http\Controllers;

use App\Models\Instituicao;
use Illuminate\Http\Request;

class InstituicaoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $instituicao = Instituicao::all();
       return $instituicao;
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        $instituicao = Instituicao::create([
            'nome' => $validated['nome']
        ]);
        return response()->json(['message' => 'Instituicao criada com sucesso'], 201);
    }


    public function show(Instituicao $instituicao)
    {
        return Instituicao::find($instituicao);
    }

    public function update(Request $request, Instituicao $instituicao)
    {
        $validated = $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        $instituicao->update([
            'nome' => $validated['nome']
        ]);
        return response()->json(['message' => 'Instituicao atualizada com sucesso'], 200);
    }

    public function destroy(Instituicao $instituicao)
    {
        //
    }
}
