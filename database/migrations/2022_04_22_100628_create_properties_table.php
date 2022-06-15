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
            $table->string('image');
             $table->longText('description');
            $table->bigInteger('type_id')->unsigned()->nullable();
            $table->string('status')->nullable();
            $table->bigInteger('location_id')->unsigned()->nullable();
            $table->string('bedrooms')->nullable();
            $table->string('bathrooms')->nullable();
            $table->string('floors')->nullable();
            $table->string('garages')->nullable();
            $table->string('locations')->nullable();
            $table->string('area')->nullable();
            $table->string('size')->nullable();
            $table->string('SRprice')->nullable();
            $table->string('Bprice')->nullable();
            $table->string('Aprice')->nullable();
            $table->string('propertyID')->nullable();
            $table->string('videoURL')->nullable();
            $table->bigInteger('features_id')->unsigned()->nullable();
            $table->longText('gallery');
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->longText('featured')->default(false);
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
