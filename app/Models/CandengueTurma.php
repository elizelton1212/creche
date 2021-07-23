<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CandengueTurma extends Model
{
    //

    protected $fillable = [
        'turma_id',
        'candengue_id',
        'ano'

    ];

    public function Candengue()
    {
    

        return $this->hasMany('App\Models\Candengue');
    }
    
}
