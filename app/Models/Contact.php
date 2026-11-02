<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function donations(): HasMany
    {
        return $this->hasMany(Donation::class,'Donor_ID', 'Donor_ID');
    }

}
