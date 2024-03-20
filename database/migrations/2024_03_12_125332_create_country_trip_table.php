<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Create the pivot table to connect countries and trips
        Schema::create('country_trip', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id')->references('id')->on('countries');
            $table->foreignId('trip_id')->references('id')->on('trips');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop the pivot table if necessary
        Schema::dropIfExists('country_trip');
    }
};
