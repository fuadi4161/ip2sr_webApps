<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KasKeluar extends Model
{
    protected $table = 'kas_keluar';
    protected $fillable=['judul_kegiatan','deskripsi','jumlah_dana','author_id'];

    public function barang()
    {
        return $this->hasMany('App\DetailBarang');
    }
}
