<?php

namespace App;

use App\Result as Result;
use Illuminate\Database\Eloquent\Model;

class Fixture extends Model
{
    public function result()
    {
    return $this->hasMany(Result::class, 'id_fixture');
    }
    
    public function scopeIdUser($query,$id){
        return $query->where('id_user',$id);
    }

    public function user()
    {
        return $this->hasOne(User::class,'id','id_user');
    }
}
