<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //table name
    protected $table = 'contacts';
    // primary key
    protected $primaryKey = 'Contact_ID';
    //turn off timestamps (the  table has no created_at/updated_at)
    public $timestamps = false;
    //cast DOB to datetime
    protected $casts = ['Date_of_Birth' => 'datetime'];

}
