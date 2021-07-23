<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransporteCandengue extends Model
{
    //

    protected $fillable=[
        'transporte_id',
        'candengue_id',
        'obcervacao'


    ];

public function Transporte()
{
    

    return $this->belongsTo('App\Models\Transporte');
}
}
