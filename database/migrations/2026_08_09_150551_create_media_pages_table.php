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
            $table->sring("hero-tag");
            $table->text("hero-text");
            $table->text("hero-image");

            //media solutions
            $table->sring("media-solutions-tag");
            $table->text("media-solutions-tittle");
            $table->text("media-solutions-text");
            $table->json("image")->nullable;

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
        Schema::dropIfExists('media_pages');
    }
};
