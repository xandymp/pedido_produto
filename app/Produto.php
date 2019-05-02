<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = [
        'nome',
        'SKU',
        'descricao',
        'imagem',
        'valor',
        'ativo'
    ];
}
