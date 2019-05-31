<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class embarcacao extends Model
{
    protected $table = 'embarcacaos';
    protected $fillable = ['funcionario_id','cliente_id','tipo_id','modelo_id','identificacao','imagem','ano','valor_mensalidade','descricao','valor_embarcacao','data_da_compra'];
}
