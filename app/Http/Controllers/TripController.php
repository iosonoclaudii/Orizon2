<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trip;

class TripController extends Controller
{
    public function index()
    {
        // Retrieve all trips from the database
        $trips = Trip::all();
        return response()->json($trips, 200);
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'city' => 'required|string',
            'departure_date' => 'required|date',
            'return_date' => 'required|date',
            'available_seats' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0',
            'promotion_description' => 'nullable|string',
        ]);

        // Create a new trip record in the database
        $trip = Trip::create([
            'city' => $request->city,
            'departure_date' => $request->departure_date,
            'return_date' => $request->return_date,
            'available_seats' => $request->available_seats,
            'price' => $request->price,
            'promotion_description' => $request->promotion_description,
        ]);

        // Return the newly created trip with a success status code
        return response()->json($trip, 201);
    }

    public function show($id)
    {
        // Find the specified trip by its ID
        $trip = Trip::findOrFail($id);
        return response()->json($trip, 200);
    }

    public function update(Request $request, $id)
    {
         // Find the trip to update by its ID
        $trip = Trip::findOrFail($id);

        // Validate the incoming request data
        $request->validate([
            'city' => 'required|string',
            'departure_date' => 'required|date',
            'return_date' => 'required|date',
            'available_seats' => 'required|integer|min:0',
            'price' => 'required|numeric|min:0',
            'promotion_description' => 'nullable|string',
        ]);

        // Update the trip record in the database
        $trip->update([
            'city' => $request->city,
            'departure_date' => $request->departure_date,
            'return_date' => $request->return_date,
            'available_seats' => $request->available_seats,
            'price' => $request->price,
            'promotion_description' => $request->promotion_description,
        ]);

        // Return the updated trip with a success status code
        return response()->json($trip, 200);
    }

    public function destroy($id)
    {
         // Find the trip to delete by its ID
        $trip = Trip::findOrFail($id);
         // Delete the trip record from the database
        $trip->delete();
         // Return a success status code
        return response()->json(null, 204);
    }
}
