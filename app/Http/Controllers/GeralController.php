<?php

namespace App\Http\Controllers;

use App\Models\CategoriaModel;
use App\Models\EventoModel;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\Request;

class GeralController extends Controller
{
    //
    public function index(){
        $data['title'] = 'Home';
        $data['eventos']= EventoModel::with('categoria')->get();
        // $data['categorias']= CategoriaModel::all();
        // dd($data['eventos'][0]->categoria->nome);
        return view('welcome', $data);
    }

    public function gestao(){
        $data['title'] = 'Administração';
        return view('admin.dashboard', $data);
    }
    public function evento(){
        $data['title'] = 'Eventos';
        $data['eventos'] = EventoModel::with('categoria')->get();
        return view('admin.evento.list', $data);
    }
    public function categoria(){
        $data['title'] = 'Categorias';
        $data['categorias'] = CategoriaModel::all();
        return view('admin.categoria.list', $data);
    }

}
