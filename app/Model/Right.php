<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Right extends Model
{
    protected $table = "right";

    public function user()
    {
        return $this->hasMany('App\Model\User');
    }
}
