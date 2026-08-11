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
        Schema::create('media_pages', function (Blueprint $table) {
            $table->id();
            //Hero Section
            $table->text("hero-title")->nullable();
            $table->text("hero-sub-title")->nullable();
            $table->text("hero-image")->nullable();

            //media solutions
            $table->strtexting("media-solutions-quote")->nullable();
            $table->text("media-solutions-title")->nullable();
            $table->text("media-solutions-text")->nullable();
            $table->json("images")->nullable(); // array of strings

            // Video
            $table->text("vidoe")->nullable();

            //media
            $table->text("media-image-1")->nullable();
            $table->text("media-image-2")->nullable();
            $table->text("media-image-3")->nullable();
            $table->text("media-image-4")->nullable();
            $table->text("media-image-5")->nullable();
            $table->text("media-image-6")->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media_pages');
    }
};
