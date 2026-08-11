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
        Schema::create('about_us_pages', function (Blueprint $table) {
            $table->id();

            // Hero Section
            $table->text("hero-image")->nullable();
            $table->string("title")->nullable();
            $table->string("subtitle")->nullable();

            // Origins and Beginnings Section
            $table->string("beginning-tag")->nullable();
            $table->text("beginning-tittle")->nullable();
            $table->text("beginning-text")->nullable();

            // Our vision Section
            $table->string("our-vision-tag")->nullable();
            $table->text("our-vision-vertical-tag")->nullable();
            $table->text("our-vision-tittle")->nullable();
            $table->text("our-vision-text")->nullable();
            $table->text("our-vision-image")->nullable();

            //Our Mission Section
            $table->string("our-mission-tag")->nullable();
            $table->text("our-mission-tittle")->nullable();
            $table->text("our-mission-text")->nullable();
            $table->text("our-mission-image")->nullable();
            $table->text("our-mission-floating-image")->nullable();

            // Values
            $table->string("values-tag")->nullable();
            $table->text("values-title")->nullable();
            $table->string("respecting-sanctity-title")->nullable();
            $table->text("respecting-sanctity-text")->nullable();
            $table->string("integrity-and-credibility-tittle")->nullable();
            $table->text("integrity-and-credibility-text")->nullable();
            $table->string("experience-and-professionalism-tittle")->nullable();
            $table->text("experience-and-professionalism-text")->nullable();
            $table->string("comfort-and-safety-tittle")->nullable();
            $table->text("comfort-and-safety-text")->nullable();
            $table->string("innovation-and-evelopment-tittle")->nullable();
            $table->text("innovation-and-evelopment-text")->nullable();
            $table->string("service-excellence-tittle")->nullable();
            $table->text("service-excellence-text")->nullable();
            $table->string("egyptian-authenticity-tittle")->nullable();
            $table->text("egyptian-authenticity-text")->nullable();

            // Nile Journey
            $table->string("nile-journey-tag")->nullable();
            $table->text("nile-journey-tittle")->nullable();
            $table->text("nile-journey-text")->nullable();
            $table->text("nile-journey-image")->nullable();
            $table->text("nile-journey-floating-image")->nullable();

            // Achievements
            $table->text("achievements-quote")->nullable();
            $table->text("achievements-tittle")->nullable();
            $table->text("achievements-text")->nullable();
            $table->integer("achievements-years-count")->nullable();
            $table->json("achievements")->nullable(); // Include tittle and text

            // Timeline
            $table->string("tmeline-tag")->nullable();
            $table->text("tmeline-tittle")->nullable();
            $table->json("tmeline")->nullable(); // array of dictionaries each include year and an array of events strings

            // Team
            $table->string("team-tag")->nullable();
            $table->text("team-title")->nullable();
            $table->text("team-text")->nullable();
            $table->text("team-image")->nullable();

            // Video
            $table->text("video")->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us_pages');
    }
};
