<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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

    protected $fillable = ['Donation_Amount', 'Donation_Date'];

    public function contact(): BelongsTo
    {
        return $this->belongsTo(Contact::class,'Donor_ID','Donor_ID');
    }

}
