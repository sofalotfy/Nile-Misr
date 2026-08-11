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
        Schema::create('hajj_packages', function (Blueprint $table) {
            $table->id();

            //Data
            $table->string('tag')->nullable();
            $table->string('title')->nullable();
            $table->integer('duration')->nullable(); //in days
            $table->string('date')->nullable();
            $table->float('rating')->nullable();
            $table->integer('Deposit')->nullable();
            $table->integer('entrey-fee')->nullable();

            //MAKA
            $table->string('maka-hotel')->nullable();
            $table->string('maka-address')->nullable();
            $table->float('maka-rating')->nullable();
            $table->integer('maka-rating_count')->nullable();
            $table->string('maka-distance')->nullable();
            $table->string('maka-duration')->nullable();
            $table->boolean('maka-includes-iftar')->default(false)->nullable();
            $table->json('maka-images')->nullable(); // array of images
            $table->text('maka-location')->nullable();

            //MADINA
            $table->string('madina-hotel')->nullable();
            $table->string('madina-address')->nullable();
            $table->float('madina-rating')->nullable();
            $table->integer('madina-rating_count')->nullable();
            $table->string('madina-distance')->nullable();
            $table->string('madina-duration')->nullable();
            $table->boolean('madina-includes-iftar')->default(false)->nullable();
            $table->json('madina-images')->nullable(); // array of images
            $table->text('madina-location')->nullable();

            //details
            $table->string('description');
            $table->json('events');   //an array of events 
            //each event has a type and a data array of attributes depending on hte type
            //flight: data array only has key text holding string
            //stay: data array has date, area, hotel, duration and meals all are strings

            //flight
            $table->string('flight-host')->nullable();
            $table->json('flight-stops')->nullable(); //just an array of strings

            $table->json('program_includes')->nullable();  //array of strings
            $table->json('general_notes')->nullable();  //array of strings
            $table->json('required_papers')->nullable();  //array of strings
            $table->json('cancelation_policy')->nullable();  //array of strings
            $table->json('external_visas')->nullable();  //array of strings
<<<<<<< HEAD
=======

            $table->json('notes')->nullable();  //array of strings
>>>>>>> da9381ae28d5e57956807c3f0a8a65bb2ab6a6f6


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hajj_packages');
    }
};
