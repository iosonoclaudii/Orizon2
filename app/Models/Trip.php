<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = [
        'city',
        'departure_date',
        'return_date',
        'available_seats',
        'price',
        'promotion_description',
    ];

    /**
     * Define a many-to-many relationship with the Country model.
     */
    public function countries()
    {
        return $this->belongsToMany(Country::class);
    }
}
