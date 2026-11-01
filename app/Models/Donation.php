<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
    //table name
    protected $table = 'donations';
    // primary key
    protected $primaryKey = 'Donation_ID';
    //turn off timestamps (the  table has no created_at/updated_at)
    public $timestamps = false;
    //casts
    protected $casts = ['Donation_Date' => 'datetime'];
}
