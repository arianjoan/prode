<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = ['scoreA', 'scoreB', 'id'];

    public function scopeIdFixture($query,$id)
    {
        return $query->where('id_fixture',$id);
    }

    public function match()
    {
        return $this->belongsTo(Match::class, 'id_match');
    }

    public function fixture()
    {
    return $this->belongsTo(Fixture::class, 'id_fixture');
    }

    public function teamA()
    {
        return $this->belongsTo(Team::class, 'id_teamA');
    }

    public function teamB()
    {
        return $this->belongsTo(Team::class, 'id_teamB');
    }
}