<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kalendar extends Model
{
    protected $table = "kalender";
    protected $fillable = ['deskripsi','title', 'start', 'end', 'allDay', 'color','textColor'];
}
