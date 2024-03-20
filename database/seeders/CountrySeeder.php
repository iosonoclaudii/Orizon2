<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Country::create([
            'country' => 'Italy',
            'description' => 'A beautiful country in Southern Europe known for its rich history, art, and culture.',
            'continent' => 'Europe',
            'tourist_rating' => 9,
        ]);

        Country::create([
            'country' => 'Spain',
            'description' => 'Explore the vibrant culture and beautiful landscapes of Spain.',
            'continent' => 'Europe',
            'tourist_rating' => 8,
        ]);

        Country::create([
            'country' => 'France',
            'description' => 'Discover the romantic charm and exquisite cuisine of France.',
            'continent' => 'Europe',
            'tourist_rating' => 8,
        ]);

        Country::create([
            'country' => 'USA',
            'description' => 'Experience the diversity and innovation of the United States.',
            'continent' => 'North America',
            'tourist_rating' => 7,
        ]);

        Country::create([
            'country' => 'Japan',
            'description' => 'Immerse yourself in the unique blend of tradition and modernity in Japan.',
            'continent' => 'Asia',
            'tourist_rating' => 9,
        ]);
    }
}
