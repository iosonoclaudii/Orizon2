<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application.
| These routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route to retrieve user information (protected by Sanctum authentication)
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Resource routes for countries with additional route for retrieving trips associated with a specific country
Route::resource('countries', 'App\Http\Controllers\CountryController');
Route::get('countries/{country}/trips', 'App\Http\Controllers\CountryController@trips');

// Resource routes for trips with additional routes for retrieving all trips and countries associated with a specific trip
Route::resource('trips', 'App\Http\Controllers\TripController');
Route::get('trips', 'App\Http\Controllers\TripController@index');
Route::get('trips/{trip}/countries', 'App\Http\Controllers\TripController@countries');
