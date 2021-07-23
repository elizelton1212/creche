<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    //
protected $fillable= [
'descricao'

];

public function Candengue()
{
    # code...

    return $this->belongsToMany('App\Models\Candengue');
}


}
