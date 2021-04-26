<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    protected $table = 'pembayaran';

    public function profiluser()
    {
        return $this->belongsTo('App\ProfilUser','user_id');
    }
}
