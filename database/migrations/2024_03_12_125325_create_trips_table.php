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
        // Create the 'trips' table to store trip information
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->string('city');
            $table->date('departure_date');
            $table->date('return_date');
            $table->integer('available_seats');
            $table->decimal('price', 8, 2);
            $table->text('promotion_description')->nullable();
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop the 'trips' table if necessary
        Schema::dropIfExists('trips');
    }
};
