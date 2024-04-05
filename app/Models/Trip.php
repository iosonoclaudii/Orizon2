<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    // Fields that are mass assignable
    protected $fillable = [
        'city',
        'departure_date',
        'return_date',
        'available_seats',
        'price',
        'promotion_description',
    ];

    // Define the relationship with the Country model (Many-to-Many)
    public function countries()
    {
        return $this->belongsToMany(Country::class, 'country_trip');
    }
}
