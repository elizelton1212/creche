<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Propina extends Model
{
    //
    protected $fillable =[
        'ano', 
        'mes',
        'candengue_id',
        'funcionario_id',
 
 ];
 
 public function candengue(Type $var = null)
 {
     # code...
 
     return $this->hasOne('App\Models\Candengue');
 }
}
