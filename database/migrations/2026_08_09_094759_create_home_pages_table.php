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
            $table->string("hero-tag")->nullable();
            $table->string("hero-title")->nullable();
            $table->text("sub-title")->nullable();
            $table->string("hajj-season")->nullable();
            $table->text("hero-floating-image")->nullable();

            // pilgrimCount
            $table->string("pilgrim-text")->nullable();

            // Rate
            $table->string("rate-text")->nullable();

            //Review
            $table->string("review-text")->nullable();

            //Section 1
            $table->text("section1-image")->nullable();
            $table->text("section1-floating-image")->nullable();
            $table->string("section1-tag")->nullable();
            $table->text("section1-title")->nullable();
            $table->text("section1-description")->nullable();
            $table->string("btn-text")->nullable();
            $table->integer("hotline")->nullable();

            //Section 2
            $table->string("section2-tag")->nullable();
            $table->text("section2-title")->nullable();

            //Section 3
            $table->text("section3-image")->nullable();
            $table->text("section3-floating-image")->nullable();
            //Our services 
            $table->json("Our Services")->nullable(); // Incude image,title,description,button_text

            // Experiences
            $table->string("experiences-title")->nullable();
            $table->string("experiences-opinion")->nullable();

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
