<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transporte extends Model
{
    //
    protected $fillable = [

        'pontoPartida',
        'pontoChegada',
        'preco',
    ];

    
}
