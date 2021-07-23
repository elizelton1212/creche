<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Atividade extends Model
{
    //
    protected $fillable=['descricao','valor'];


    public function Candengue()
    {
        # code...

        return $this->belongsToMany('App\Models\Candengue');

    }
}
