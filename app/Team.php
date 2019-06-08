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

    public function resultsA()
    {
        return $this->belongsTo(Stat::class, 'id', 'id_teamA');
    }

    public function resultsB()
    {
        return $this->belongsTo(Stat::class, 'id', 'id_teamB');
    }
}
