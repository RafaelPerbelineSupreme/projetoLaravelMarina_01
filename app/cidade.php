<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cidade extends Model
{
    protected $table = 'cidades';
    protected $fillable = ['uf_id','nome'];
}
