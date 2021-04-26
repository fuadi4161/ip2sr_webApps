<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailBarang extends Model
{
    protected $table = 'detail_barang';

    protected $fillable = ['kas_keluar_id','item','harga','qty','total'];
}
