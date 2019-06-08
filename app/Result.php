<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    public function result()
    {
        return $this->belongsTo(Stat::class, 'id', 'id_result');
    }

    
}
