<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    public function index(Request $request)
{
    $query = Trip::query();

    // Filtering by countries
    if ($request->has('country_id')) {
        $query->whereHas('countries', function ($query) use ($request) {
            $query->where('countries.id', $request->input('country_id'));
        });
    }

    // Filtering by available seats
    if ($request->has('available_seats')) {
        $query->where('available_seats', '>=', $request->input('available_seats'));
    }

    $trips = $query->get();

    return response()->json($trips, 200);
}

public function store(Request $request)
{
    $request->validate([
        'city' => 'required|string',
        'departure_date' => 'required|date',
        'return_date' => 'required|date',
        'available_seats' => 'required|integer|min:0',
        'price' => 'required|numeric|min:0',
        'promotion_description' => 'nullable|string',
        'countries' => 'required|array',
    ]);

    $trip = Trip::create($request->only([
        'city', 'departure_date', 'return_date', 'available_seats',
        'price', 'promotion_description',
    ]));

    // Associating countries with the trip using the pivot table
    $trip->countries()->attach($request->input('countries'));

    return response()->json($trip, 201);
}

public function show(Trip $trip)
{
    return response()->json($trip, 200);
}

public function update(Request $request, Trip $trip)
{
    $request->validate([
        'city' => 'required|string',
        'departure_date' => 'required|date',
        'return_date' => 'required|date',
        'available_seats' => 'required|integer|min:0',
        'price' => 'required|numeric|min:0',
        'promotion_description' => 'nullable|string',
    ]);

    $trip->update($request->all());

    return response()->json($trip, 200);
}

public function destroy(Trip $trip)
{
    $trip->delete();

    return response()->json(null, 204);
}

public function countries(Trip $trip)
{
    $countries = $trip->countries()->with('trips')->get();

    return response()->json($countries, 200);
}

}
