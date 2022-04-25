<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string('address')->default('Address');
            $table->string('country')->default('Country');
            $table->string('city')->default('City');
            $table->string('state')->default('State');
            $table->string('zipcode')->default('Zipcode');
            $table->string('neighborhood')->default('Neighborhood');
            $table->string('postedby')->default('postedby');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('locations');
    }
}
