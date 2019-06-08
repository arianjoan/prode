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

    public function StatA()
    {
        return $this->belongsTo(Stat::class, 'id', 'id_teamA');
    }

    public function StatB()
    {
        return $this->belongsTo(Stat::class, 'id', 'id_teamB');
    }
}
