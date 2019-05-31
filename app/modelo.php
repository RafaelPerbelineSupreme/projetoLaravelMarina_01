<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelo extends Model
{
    protected $table = 'modelos';
    protected $fillable = ['marca_id','nome'];
}
