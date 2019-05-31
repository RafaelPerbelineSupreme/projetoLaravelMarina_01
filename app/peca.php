<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class peca extends Model
{
    protected $table = 'pecas';
    protected $fillable = ['fornecedor_id','nome','imagem','quantidade','valor','descricao'];
}
