<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stat extends Model
{
    public function teamA()
    {
        return $this->belongsTo(Team::class, "id_teamA");
    }

    public function teamB()
    {
        return $this->belongsTo(Team::class, "id_teamB");
    }

    public function result()
    {
        return $this->belongsTo(Result::class, "id", "id_result");
    }
}
