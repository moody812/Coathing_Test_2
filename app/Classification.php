<?php

namespace App;

use illuminate\Database\Eloquent\Model;

class Classification extends Model
{
    public function animals()
    {
        return $this->hasMany('App\Animal');
    }
}