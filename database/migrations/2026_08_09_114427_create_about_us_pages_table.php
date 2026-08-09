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
            $table->text("hero-image");
            $table->string("title");
            $table->string("subtitle");

            // Origins and Beginnings Section
            $table->string("beginning-tag");
            $table->text("beginning-tittle");
            $table->text("beginning-text");

            // Our vision Section
            $table->string("our-vision-tag");
            $table->text("our-vision-vertical-tag");
            $table->text("our-vision-tittle");
            $table->text("our-vision-text");
            $table->text("our-vision-image");

            //Our Mission Section
            $table->string("our-mission-tag");
            $table->text("our-mission-tittle");
            $table->text("our-mission-text");
            $table->text("our-mission-image");
            $table->text("our-mission-floating-image");

            // Values
            $table->string("values-tag");
            $table->text("values-title");
            $table->string("respecting-sanctity-title");
            $table->text("respecting-sanctity-text");
            $table->string("integrity-and-credibility-tittle");
            $table->text("integrity-and-credibility-text");
            $table->string("experience-and-professionalism-tittle");
            $table->text("experience-and-professionalism-text");
            $table->string("comfort-and-safety-tittle");
            $table->text("comfort-and-safety-text");
            $table->string("innovation-and-evelopment-tittle");
            $table->text("innovation-and-evelopment-text");
            $table->string("service-excellence-tittle");
            $table->text("service-excellence-text");
            $table->string("egyptian-authenticity-tittle");
            $table->text("egyptian-authenticity-text");

            // Nile Journey
            $table->string("nile-journey-tag");
            $table->text("nile-journey-tittle");
            $table->text("nile-journey-text");
            $table->text("nile-journey-image");
            $table->text("nile-journey-floating-image");

            // Achievements
            $table->text("achievements-tag");
            $table->text("achievements-tittle");
            $table->text("achievements-text");
            $table->text("achievements-years-nummber");
            $table->text("achievements-year");
            $table->json("achievements")->nullable; // Include number,tittle and text

            // Timeline
            $table->string("tmeline-tag");
            $table->text("tmeline-tittle");
            $table->json("tmeline")->nullable;

            // Team
            $table->string("team-taag");
            $table->text("team-tittle");
            $table->text("team-text");
            $table->text("team-image");

            // Video
            $table->text("video");


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
