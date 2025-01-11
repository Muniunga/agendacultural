<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class EventoModel extends Model
{
    use HasFactory;
    protected $table = 'eventos';
    protected $fillable = ['nome', 'local_evento', 'data_evento', 'hora_evento', 'categoria', 'descricao', 'imagem', 'rede_social'];


    public static function getEvento()
    {

        $return = self::select('eventos.*', 'categorias.nome as categoria_nome')
            ->join('categorias', 'categorias.id', '=', 'eventos.categoria');
            
        if (!empty(Request()->get('nome'))) {
            $return = $return->where('eventos.nome', 'like', '%' . Request()->get('nome') . '%');
        }

        if (!empty(Request()->get('categoria')) && Request()->get('categoria') !== 'Categorias') {
            $return = $return->where('eventos.categoria', '=', Request()->get('categoria'));
        }

        if (!empty(Request()->get('data'))) {
            $return = $return->whereDate('eventos.data_evento', '=', Request()->get('data'));
            // dd($return);
        }


        $return = $return->orderBy('id', 'desc')
            ->paginate(5);

        return $return;
    }


    public function categoria()
    {
        return $this->belongsTo(CategoriaModel::class, 'categoria');
    }
}
