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
        Schema::create('reviews_pages', function (Blueprint $table) {
            $table->id();
            //Hero Section
            $table->sring("hero-tag")->nullable();
            $table->text("hero-text")->nullable();
            $table->text("hero-image")->nullable();

            // Experiences
            $table->string("experiences-title")->nullable();

            // Video
            $table->text("vidoe")->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews_pages');
    }
};
