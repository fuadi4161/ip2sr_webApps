<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class UserPosision extends Model
{
    protected $table = 'posision_users';


    public function user()
    {
        return $this->belongsTo('App\User');
    
    }

    public function posision()
    {
        return $this->belongsTo('App\Posision');
    
    }

    public function getCreatedAtAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
        ->translatedFormat('l,d M Y');
    }
}
