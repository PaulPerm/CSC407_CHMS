<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Household extends Model
{
     //table name
    protected $table = 'households';
    // primary key
    protected $primaryKey = 'Household_ID';
    //turn off timestamps (the  table has no created_at/updated_at)
    public $timestamps = false;
}
