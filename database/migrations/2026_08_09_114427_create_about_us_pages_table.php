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
            $table->text("beginning-title")->nullable();
            $table->text("beginning-text")->nullable();

            // Our vision Section
            $table->string("our-vision-tag")->nullable();
            $table->text("our-vision-vertical-tag")->nullable();
            $table->text("our-vision-title")->nullable();
            $table->text("our-vision-text")->nullable();
            $table->text("our-vision-image")->nullable();

            //Our Mission Section
            $table->string("our-mission-tag")->nullable();
            $table->text("our-mission-title")->nullable();
            $table->text("our-mission-text")->nullable();
            $table->text("our-mission-image")->nullable();
            $table->text("our-mission-floating-image")->nullable();

            // Values
            $table->string("values-tag")->nullable();
            $table->text("values-title")->nullable();
            $table->string("respecting-sanctity-title")->nullable();
            $table->text("respecting-sanctity-text")->nullable();
            $table->string("integrity-and-credibility-title")->nullable();
            $table->text("integrity-and-credibility-text")->nullable();
            $table->string("experience-and-professionalism-title")->nullable();
            $table->text("experience-and-professionalism-text")->nullable();
            $table->string("comfort-and-safety-title")->nullable();
            $table->text("comfort-and-safety-text")->nullable();
            $table->string("innovation-and-evelopment-title")->nullable();
            $table->text("innovation-and-evelopment-text")->nullable();
            $table->string("service-excellence-title")->nullable();
            $table->text("service-excellence-text")->nullable();
            $table->string("egyptian-authenticity-title")->nullable();
            $table->text("egyptian-authenticity-text")->nullable();

            // Nile Journey
            $table->string("nile-journey-tag")->nullable();
            $table->text("nile-journey-title")->nullable();
            $table->text("nile-journey-text")->nullable();
            $table->text("nile-journey-image")->nullable();
            $table->text("nile-journey-floating-image")->nullable();

            // Achievements
            $table->text("achievements-quote")->nullable();
            $table->text("achievements-title")->nullable();
            $table->text("achievements-text")->nullable();
            $table->integer("achievements-years-count")->nullable();
            $table->json("achievements")->nullable(); // Include title and text

            // Timeline
            $table->string("tmeline-tag")->nullable();
            $table->text("tmeline-title")->nullable();
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

        DB::table('about_us_pages')->insert(['id'  => 1]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us_pages');
    }
};
