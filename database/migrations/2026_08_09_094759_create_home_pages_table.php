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
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();

            // Hero Section 
            $table->json('images')->nullable(); //Image
            $table->string("hero-tag");
            $table->text("hero-title");
            $table->text("sub-title");
            $table->string("hajj-season");
            $table->text("hero-floating-image");

            // pilgrimCount
            $table->string("pilgrim-count");
            $table->string("pilgrim-text");
            // Rate

            //Review
            $table->string("review-count");
            $table->string("review-text");

            //Section 1
            $table->text("section1-image");
            $table->text("section1-floating-image");
            $table->string("section1-tag");
            $table->string("section1-title");
            $table->string("section1-subtitle");
            $table->integer("hotline");

            //Section 2
            $table->string("section2-tag");
            $table->string("section2-title");

            //Section 3
            $table->text("section3-image");
            $table->text("section3-floating-image");
            //Our services 
            $table->json("Our Services")->nullable(); // Incude image,tag,title and subtittle

            // Experiences
            $table->string("experiences");
            $table->json("comments")->nullable; // Include name and comment text

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_pages');
    }
};
