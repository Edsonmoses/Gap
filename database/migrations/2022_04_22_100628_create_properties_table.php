<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->string('description');
            $table->bigInteger('type_id')->unsigned()->nullable();
            $table->string('status');
            $table->bigInteger('location_id')->unsigned()->nullable();
            $table->string('bedrooms')->nullable();
            $table->string('bathrooms')->nullable();
            $table->string('floors');
            $table->string('garages');
            $table->string('area');
            $table->string('size');
            $table->string('SRprice');
            $table->string('Bprice');
            $table->string('Aprice');
            $table->string('propertyID');
            $table->string('videoURL');
            $table->bigInteger('features_id')->unsigned()->nullable();
            $table->string('gallery');
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->boolean('featured')->default(false);
            $table->string('postedby')->default('postedby');
            $table->timestamps();
            $table->foreign('type_id')->references('id')->on('types')->onDelete('cascade');
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
            $table->foreign('features_id')->references('id')->on('features')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
