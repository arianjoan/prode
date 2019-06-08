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

    public function results()
    {
        return $this->belongsToMany(Result::class, 'id', 'id_match');
    }

    public function scopeName($query,$name){
       return  $query->where('name','=', $name);
    }
}
