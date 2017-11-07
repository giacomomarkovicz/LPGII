<?php

namespace Laravel;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable= [
        'nome',
        'valor',
        'categoria'
        
    ];
}
