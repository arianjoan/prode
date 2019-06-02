<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'nameTeam'
    ];

    public function matchA()
    {
        return $this->belongsToMany(Match::class, "id", "id_teamA");
    }

    public function matchB()
    {
        return $this->belongsToMany(Match::class, "id", "id_teamB");
    }
}
