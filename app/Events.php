<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $fillable = ['deskripsi','title', 'start', 'end', 'allDay', 'color','textColor'];
}
