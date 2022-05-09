<?php

namespace App;

use illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    public function classification()
    {
        return $this->belongsTo('App\Classification');
    }
}