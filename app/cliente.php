<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $table = 'clientes';
    protected $fillable = ['cidade_id','nome','rg','cpf','data_nascimento','imagem','endereco','telefone_1','telefone_2','usuario','pass'];
}
