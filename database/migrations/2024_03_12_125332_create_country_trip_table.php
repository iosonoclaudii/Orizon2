<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountryTripTable extends Migration
{
    public function up()
    {
        Schema::create('country_trip', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id')->constrained();
            $table->foreignId('trip_id')->constrained();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('country_trip');
    }
}
