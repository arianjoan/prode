<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    public function stat()
    {
        return $this->hasOne(Stat::class, 'id_result');
    }

    public function match()
    {
        return $this->belongsTo(Match::class, 'id_match');
    }

    public function fixture()
    {
    return $this->belongsTo(Fixture::class, 'id_fixture');
    }
}
