<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agents', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->string('position');
            $table->longText('details');
            $table->string('image');
            $table->string('cover');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('linkedin');
            $table->string('status');
            $table->bigInteger('property_id')->unsigned()->nullable();
            $table->string('phone');
            $table->string('mobile');
            $table->string('email');
            $table->string('website');
            $table->timestamps();
            $table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agents');
    }
}
