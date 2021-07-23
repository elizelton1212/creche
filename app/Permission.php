<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    //
    public function roles()
    {
        # code...
        return $this->belongsToMany(\App\Role::class);
    }
}
