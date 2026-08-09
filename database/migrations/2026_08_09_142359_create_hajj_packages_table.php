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
            $table->string('tag');
            $table->string('title');
            $table->integer('duration'); //in days
            $table->string('date');
            $table->string('maka-hotel');
            $table->string('madina-hotel');
            $table->float('rating');
            $table->integer('Deposit');
            $table->integer('entrey-fee');

            //details
            $table->string('description');
            $table->json('events');   //an array of events 
                                      //each event has a type and a data array of attributes depending on hte type
                                      //flight: data array only has key text holding string
                                      //stay: data array has date, area, hotel, duration and meals all are strings

            

            //flight
            $table->string('flight-host');
            $table->json('flight-stops'); //just an array of strings
            
            $table->json('notes')->nullable();  //array of strings

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
