<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fornecedor extends Model
{
    protected $table = 'fornecedors';
    protected $fillable = ['cnpj','nome','inscricaoEstadual','imagem','endereco','telefone_1','telefone_2'];
}
