<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    public function teamA()
    {
        return $this->hasOne(Team::class, "id", "id_teamA");
    }

    public function teamB()
    {
        return $this->hasOne(Team::class, "id", "id_teamB");
    }
}
