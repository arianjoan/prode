<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fixture extends Model
{
    public function results()
    {
        return $this->belongsToMany(Result::class, 'id', 'id_fixture');
    }

    public function scopeIdUser($query,$id){
        return $query->where('id_user',$id);
    }

    public function user()
    {
        return $this->hasOne(User::class,'id','id_user');
    }
}
