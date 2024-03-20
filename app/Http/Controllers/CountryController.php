<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
    public function index()
    {
         // Retrieve all countries from the database
        $countries = Country::all();
        return response()->json($countries, 200);
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'country' => 'required|string|unique:countries,country',
            'description' => 'nullable|string',
            'continent' => 'required|string',
            'tourist_rating' => 'nullable|integer',
        ]);

         // Create a new country record in the database
         $country = Country::create([
            'country' => $request->country,
            'description' => $request->description,
            'continent' => $request->continent,
            'tourist_rating' => $request->tourist_rating,
        ]);

        // Return the newly created country with a success status code
        return response()->json($country, 201);
    }

    public function show($id)
    {
        // Find the specified country by its ID
        $country = Country::findOrFail($id);
        return response()->json($country, 200);
    }

    public function update(Request $request, $id)
    {
        // Find the country to update by its ID
        $country = Country::findOrFail($id);

         // Validate the incoming request data
        $request->validate([
            'country' => 'required|string|unique:countries,country,' . $country->id,
            'description' => 'nullable|string',
            'continent' => 'required|string',
            'tourist_rating' => 'nullable|integer',
        ]);

        // Update the country record in the database
        $country->update([
            'country' => $request->country,
            'description' => $request->description,
            'continent' => $request->continent,
            'tourist_rating' => $request->tourist_rating,
        ]);

        // Return the updated country with a success status code
        return response()->json($country, 200);
    }

    public function destroy($id)
    {
        // Find the country to delete by its ID
        $country = Country::findOrFail($id);
        
        // Delete the country record from the database
        $country->delete();

        // Return a success status code
        return response()->json(null, 204);
    }
}
