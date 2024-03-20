<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Trip;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Trip::create([
            'city' => 'Rome',
            'departure_date' => '2024-05-01',
            'return_date' => '2024-05-07',
            'available_seats' => 50,
            'price' => 1000.00,
            'promotion_description' => 'Explore the ancient wonders of Rome on this unforgettable journey!',
        ]);

        Trip::create([
            'city' => 'Paris',
            'departure_date' => '2024-06-15',
            'return_date' => '2024-06-20',
            'available_seats' => 30,
            'price' => 1200.00,
            'promotion_description' => 'Discover the charm of Paris with our special offer!',
        ]);

        Trip::create([
            'city' => 'Tokyo',
            'departure_date' => '2024-08-10',
            'return_date' => '2024-08-20',
            'available_seats' => 40,
            'price' => 1500.00,
            'promotion_description' => 'Experience the dynamic energy of Tokyo, the capital city of Japan!',
        ]);

        Trip::create([
            'city' => 'New York City',
            'departure_date' => '2024-09-05',
            'return_date' => '2024-09-12',
            'available_seats' => 35,
            'price' => 1800.00,
            'promotion_description' => 'Discover the iconic landmarks and vibrant culture of New York City!',
        ]);

        Trip::create([
            'city' => 'Barcelona',
            'departure_date' => '2024-07-20',
            'return_date' => '2024-07-27',
            'available_seats' => 25,
            'price' => 1100.00,
            'promotion_description' => 'Immerse yourself in the lively atmosphere and architectural marvels of Barcelona!',
        ]);
    }
}
