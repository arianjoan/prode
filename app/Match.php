<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
   protected $fillable = [
        'dateMatch','id_teamA','id_teamB', 'name'
   ];

    public function teamA()
    {
        return $this->hasOne(Team::class, "id", "id_teamA");
    }

    public function teamB()
    {
        return $this->hasOne(Team::class, "id", "id_teamB");
    }
}
