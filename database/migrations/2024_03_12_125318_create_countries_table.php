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
        // Create the 'countries' table to store country information
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('country');
            $table->text('description')->nullable();
            $table->string('continent');
            $table->integer('tourist_rating')->nullable();
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Drop the 'countries' table if necessary
        Schema::dropIfExists('countries');
    }
};
