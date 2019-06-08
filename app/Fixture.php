<?php

namespace App;

use App\Result as Result;
use Illuminate\Database\Eloquent\Model;

class Fixture extends Model
{
    public function result()
    {
    return $this->hasMany(Result::class, 'id_fixture');
    }
}