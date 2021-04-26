<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfilUser extends Model
{
    protected $table = 'profile_users';
    protected $fillable = ['user_id','nama', 'deskripsi', 'jenkel', 'kontack', 'alamat', 'tanggal_lahir','telegram','facebook','twitter','instagram', 'created_at', 'updated_at'];

    public function pembayaran()
    {
        return $this->belongsTo('App\Pembayaran','user_id');
    }
}
