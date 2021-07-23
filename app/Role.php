<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //

    public function Permission()
    {
    return $this->belongsToMany(\App\Permission::class);
    }
}
