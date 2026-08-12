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
        Schema::create('umrahs_packages', function (Blueprint $table) {
            $table->id();

            //Data
            $table->string('duration'); // enum
            $table->string('title');
            

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

            //flight
            $table->string('flight-host')->nullable();
            $table->json('flight-stops')->nullable(); //just an array of strings

            $table->json('program_includes')->nullable();  //array of strings
            $table->json('general_notes')->nullable();  //array of strings
            $table->json('required_papers')->nullable();  //array of strings
            $table->json('cancelation_policy')->nullable();  //array of strings
            $table->json('external_visas')->nullable();  //array of strings

            $table->text('notes')->nullable();  //array of strings


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umrahs_packages');
    }
};
