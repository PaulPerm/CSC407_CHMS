<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    //table name
    protected $table = 'events';
    // primary key
    protected $primaryKey = 'Event_ID';
    //turn off timestamps (the  table has no created_at/updated_at)
    public $timestamps = false;
    //casts
    protected $casts = ['Event_Start_Date' => 'datetime', 'Event_End_Date' => 'datetime'];
}
