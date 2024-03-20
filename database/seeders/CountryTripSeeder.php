<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;
use App\Models\Trip;

class CountryTripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Find countries and trips of interest
        $italy = Country::where('country', 'Italy')->first();
        $romeTrip = Trip::where('city', 'Rome')->first();

        $spain = Country::where('country', 'Spain')->first();
        $parisTrip = Trip::where('city', 'Paris')->first();

        $japan = Country::where('country', 'Japan')->first();
        $tokyoTrip = Trip::where('city', 'Tokyo')->first();

        $usa = Country::where('country', 'USA')->first();
        $nycTrip = Trip::where('city', 'New York City')->first();

        $france = Country::where('country', 'France')->first();
        $barcelonaTrip = Trip::where('city', 'Barcelona')->first();

        // Link Rome trip with Italy
        $italy->trips()->attach($romeTrip);

        // Link Paris trip with Spain
        $spain->trips()->attach($parisTrip);

        // Link Tokyo trip with Japan
        $japan->trips()->attach($tokyoTrip);

        // Link New York City trip with USA
        $usa->trips()->attach($nycTrip);

        // Link Barcelona trip with France
        $france->trips()->attach($barcelonaTrip);

        // Add more trip-country connections if necessary...
    }
}
