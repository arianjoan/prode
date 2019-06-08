<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fixture extends Model
{
    public function results()
    {
        return $this->belongsToMany(Result::class, 'id', 'id_fixture');
    }
}
