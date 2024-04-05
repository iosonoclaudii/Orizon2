<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    // Fields that are mass assignable
    protected $fillable = [
        'country',
        'description',
        'continent',
        'tourist_rating',
    ];

    // Define the relationship with the Trip model (Many-to-Many)
    public function trips()
    {
        return $this->belongsToMany(Trip::class, 'country_trip');
    }
}
