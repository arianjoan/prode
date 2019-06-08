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
        return $this->hasMany(Match::class, "id_teamA");
    }

    public function matchB()
    {
        return $this->hasMany(Match::class, "id_teamB");
    }

    public function StatA()
    {
        return $this->hasMany(Stat::class, 'id_teamA');
    }

    public function StatB()
    {
        return $this->hasMany(Stat::class, 'id_teamB');
    }
}
