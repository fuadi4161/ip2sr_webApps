<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notulen extends Model
{
    protected $table = 'notulen';

    protected $fillable = ['id_kas_keluar', 'judul_pertemuan', 'note', 'document'];
}
