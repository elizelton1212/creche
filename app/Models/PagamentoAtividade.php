<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PagamentoAtividade extends Model
{
    //
    protected $fillable = ['candengue_id','atividade_id','mes'];

    public function candenge()
    {
        return $this->belongsTo('App\Models\Candengue');
    }
    
    public function atividade()
    {
        # code...
    
        return $this->hasMany('App\Models\Atividade');
    }
}
