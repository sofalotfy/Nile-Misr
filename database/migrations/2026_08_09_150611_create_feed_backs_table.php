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
        Schema::create('feed_backs', function (Blueprint $table) {
            $table->id();

            //Hero Section
            $table->sring("hero-tag");
            $table->text("hero-text");
            $table->text("hero-image");

            // // Experiences
            $table->string("experiences");
            $table->json("comments")->nullable; // Include name and comment text

            // Video
            $table->text("vidoe");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feed_backs');
    }
};
