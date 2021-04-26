<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posision extends Model
{

    public function user()
    {
        return $this->belongsToMany('App\User');
    
    }
    public function userposision()
    {
        return $this->belongsToMany('App\UserPosision', 'name');
    
    }

}
