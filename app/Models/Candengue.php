<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Candengue extends Model
{
    //
    protected $fillable = [
    'nome',
    'idade',
    'dataNascimento',
    'genero',
    'restricao',
    'nomePai',
    'nomeMae',
    'telefonePai',
    'telefoneMae',
    'pessoaAlternativa',
    'contactoPessoaAlternativa',
    'imagem'
    ];

    public function Atividade()
    {
    return $this->hasMany('App\Models\PagamentoAtividade');
    }

    public function propina()
    {
        # code...

        return $this->hasMany('App\Models\Propina');
    }

    public function Transporte()
    {
        # code...

        return $this->hasOne('App\Models\TransporteCandengue');
    }

    public function Turma()
    {
        # code...

        return $this->belongsTo('App\Models\Turma');
    }
}
