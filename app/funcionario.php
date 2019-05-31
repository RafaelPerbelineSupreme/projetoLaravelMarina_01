<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class funcionario extends Model
{
    protected $table = 'funcionarios';
    protected $fillable = ['cidade_id','nome','rg','cpf','data_nascimento','imagem','endereco','telefone_1','telefone_2','usuario','pass'];
}
