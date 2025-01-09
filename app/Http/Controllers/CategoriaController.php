<?php

namespace App\Http\Controllers;

use App\Models\CategoriaModel;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = CategoriaModel::all();
        return response()->json($categorias);
    }

    public function create()
    {
        return view('categoria.create');
    }

    public function store(Request $request)
    {
        $categoria = new CategoriaModel();
        $categoria->nome = $request->nome;
        $categoria->save();
        return response()->json($categoria);
    }

    public function edit($id)
    {
        $categoria = CategoriaModel::find($id);
        return view('categoria.edit', compact('categoria'));
    }

    public function update(Request $request, $id)
    {
        $categoria = CategoriaModel::find($id);
        if (!$categoria) {
            return response()->json(['message' => 'Categoria não encontrada'], 404);
        }
        $categoria->nome = $request->nome;
        $categoria->save();
        return response()->json($categoria);
    }

    public function destroy($id)
    {
        $categoria = CategoriaModel::find($id);
        if (!$categoria) {
            return response()->json(['message' => 'Categoria não encontrada'], 404);
        }
        $categoria->delete();
        return response()->json(['message' => 'Categoria eliminada com sucesso'], 404);
    }
}
