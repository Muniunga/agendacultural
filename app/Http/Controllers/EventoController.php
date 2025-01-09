<?php

namespace App\Http\Controllers;

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
        return view('evento.create');
    }

    public function store(Request $request)
    {
        $evento = new EventoModel();
        $evento->nome = $request->nome;
        $evento->data_evento = $request->data;
        $evento->hora_evento = $request->hora;
        $evento->local_evento = $request->local;
        $evento->categoria = $request->categoria;
        $evento->save();
        return response()->json($evento);
    }

    public function edit($id)
    {
        $evento = EventoModel::find($id);
        return view('evento.edit', compact('evento'));
    }

    public function update(Request $request, $id)
    {
        $evento = EventoModel::find($id);
        if (!$evento) {
            return response()->json(['message' => 'Evento não encontrado'], 404);
        }
        $evento->nome = $request->nome;
        $evento->data_evento = $request->data;
        $evento->hora_evento = $request->hora;
        $evento->local_evento = $request->local;
        $evento->categoria = $request->categoria;
        $evento->save();
        return response()->json($evento);
    }

    public function destroy($id)
    {
        $evento = EventoModel::find($id);
        if (!$evento) {
            return response()->json(['message' => 'Evento não encontrado'], 404);
        }
        $evento->delete();
        return response()->json(['message' => 'Evento eliminado com sucesso'], 404);
    }
}
