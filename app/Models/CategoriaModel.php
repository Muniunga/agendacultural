<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaModel extends Model
{
    use HasFactory;
    protected $table = 'categorias';
    protected $fillable = ['nome'];

    public function eventos()
    {
        return $this->hasMany(EventoModel::class, 'categoria');
    }
}
