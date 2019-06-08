<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    public function stat()
    {
        return $this->belongsTo(Stat::class, 'id', 'id_result');
    }

    public function match()
    {
        return $this->hasOne(Match::class, 'id', 'id_match');
    }

    public function fixture()
    {
        return $this->hasOne(Fixture::class, 'id', 'id_fixture');
    }
}
