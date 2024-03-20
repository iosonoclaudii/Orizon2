<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'country',
        'description',
        'continent',
        'tourist_rating',
    ];

    /**
     * Define a many-to-many relationship with the Trip model.
     */
    public function trips()
    {
        return $this->belongsToMany(Trip::class);
    }
}
