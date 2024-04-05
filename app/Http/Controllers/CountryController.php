<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    //Fetch all countries.
    public function index()
    {
        $countries = Country::all();

        return response()->json($countries, 200); // Get all countries and return JSON response
    }

    //Create a new country.
    public function store(Request $request)
    {
        $request->validate([
            'country' => 'required|string|unique:countries,country',
            'description' => 'nullable|string',
            'continent' => 'required|string',
            'tourist_rating' => 'nullable|integer',
        ]);

        $country = Country::create($request->all());

        return response()->json($country, 201);// Return JSON response with created country
    }

    //Show details of a specific country.
    public function show(Country $country)
    {
        return response()->json($country, 200);
    }

    //Update an existing country.
    public function update(Request $request, Country $country)
    {
        $request->validate([
            'country' => 'required|string|unique:countries,country,' . $country->id,
            'description' => 'nullable|string',
            'continent' => 'required|string',
            'tourist_rating' => 'nullable|integer',
        ]);

        $country->update($request->all());

        return response()->json($country, 200);// Return JSON response with updated country
    }

    //Delete a specific country.
    public function destroy(Country $country)
    {
        $country->delete();

        return response()->json(null, 204);
    }

    //Fetch trips associated with a specific country.
    public function trips(Country $country)
    {
        $trips = $country->trips()->with('countries')->get();

        return response()->json($trips, 200);
    }
}
