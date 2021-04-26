<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    protected $fillable = ['title', 'start', 'end', 'allDay', 'color','textColor'];
}
