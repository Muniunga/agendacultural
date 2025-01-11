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
        return view('admin.categoria.create');
    }

    public function store(Request $request)
    {
        $categoria = new CategoriaModel();
        $categoria->nome = $request->nome;
        $categoria->save();
        // return response()->json($categoria);
        return redirect('admin/categorias');
    }

    public function edit($id)
    {
        $categoria = CategoriaModel::find($id);
        // dd($categoria);
        return view('admin.categoria.edit',compact('categoria'));
    }

    public function update(Request $request, $id)
    {
        $categoria = CategoriaModel::find($id);
        if (!$categoria) {
            return response()->json(['message' => 'Categoria não encontrada'], 404);
        }
        $categoria->nome = $request->nome;
        $categoria->save();
        // return response()->json($categoria);
        return redirect('admin/categorias' );
    }

    public function destroy($id)
    {
        $categoria = CategoriaModel::find($id);
        if (!$categoria) {
            return response()->json(['message' => 'Categoria não encontrada'], 404);
        }
        $categoria->delete();
        return redirect('admin/categorias');
    }
}
