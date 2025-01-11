<?php

namespace App\Http\Controllers;

use App\Models\CategoriaModel;
use App\Models\EventoModel;
use Illuminate\Http\Request;

class EventoController extends Controller
{

    public function index()
    {
        $eventos = EventoModel::all();
        return response()->json($eventos);
    }

    public function create()
    {
        $data['categorias'] = CategoriaModel::all();
        // dd($data);
        return view('admin.evento.create', $data);
    }

    public function store(Request $request)
    {

        // dd($request->all());
        $evento = new EventoModel();

        if ($request->hasFile('imagem')) {
            $file = $request->file('imagem');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/eventos'), $filename);
            $evento->imagem = 'uploads/eventos/' . $filename;
        }

        $evento->nome = $request->nome;
        $evento->descricao = $request->descricao;
        // $evento->imagem = $request->imagem;
        $evento->rede_social = $request->rede_social;
        $evento->data_evento = $request->data_evento;
        $evento->hora_evento = $request->hora_evento;
        $evento->local_evento = $request->local_evento;
        $evento->categoria = $request->categoria;
        $evento->save();
        // return response()->json($evento);
        return redirect('admin/eventos' );
    }

    public function edit($id)
    {
        $data['categorias'] = CategoriaModel::all();
        $data['evento'] = EventoModel::find($id);
        return view('admin.evento.edit', $data);
    }

    public function update(Request $request, $id)
    {
        $evento = EventoModel::find($id);

        if (!$evento) {
            return response()->json(['message' => 'Evento não encontrado'], 404);
        }
        if ($request->hasFile('imagem')) {
            $file = $request->file('imagem');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/eventos'), $filename);
            $evento->imagem = 'uploads/eventos/' . $filename;
        }

        $evento->nome = $request->nome;
        $evento->descricao = $request->descricao;
        // $evento->imagem = $request->imagem;
        $evento->rede_social = $request->rede_social;
        $evento->data_evento = $request->data_evento;
        $evento->hora_evento = $request->hora_evento;
        $evento->local_evento = $request->local_evento;
        $evento->categoria = $request->categoria;
        $evento->save();
        // return response()->json($evento);
        return redirect('admin/eventos' );
    }

    public function destroy($id)
    {

        $evento = EventoModel::find($id);
        if (!$evento) {
            return response()->json(['message' => 'evento não encontrado'], 404);
        }
        $evento->delete();
        return redirect('admin/eventos' );
    }
}
