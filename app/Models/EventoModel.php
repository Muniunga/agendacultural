<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventoModel extends Model
{
    use HasFactory;
    protected $table = 'eventos';
    protected $fillable = ['nome', 'local_evento', 'data_evento', 'hora_evento', 'categoria', 'descricao', 'imagem', 'rede_social'];


    public function categoria()
    {
        return $this->belongsTo(CategoriaModel::class, 'categoria');
    }
}
