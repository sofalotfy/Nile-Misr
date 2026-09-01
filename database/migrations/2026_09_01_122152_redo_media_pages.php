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
            $table->text("media-solutions-quote")->nullable();
            $table->text("media-solutions-title")->nullable();
            $table->text("media-solutions-text")->nullable();


            $table->text("cards")->nullable();


            $table->timestamps();
        });

        DB::table('media_pages')->insert(['id'  => 1]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media_pages');
    }
};
