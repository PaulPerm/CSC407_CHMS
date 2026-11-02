<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventParticipant extends Model
{
     //table name
    protected $table = 'event_participants';
    // primary key
    protected $primaryKey = 'Event_Participant_ID';
    //turn off timestamps (the  table has no created_at/updated_at)
    public $timestamps = false;
}
