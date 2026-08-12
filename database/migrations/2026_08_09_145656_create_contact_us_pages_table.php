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
        Schema::create('contact_us_pages', function (Blueprint $table) {
            $table->id();

            //Hero Section
            $table->text("hero-title")->nullable();
            $table->text("hero-sub-title")->nullable();
            $table->text("hero-image")->nullable();


            // Contact card
            $table->text('card-tag')->nullable();
            $table->text('card-title')->nullable();
            $table->text('card-sub-title')->nullable();
            $table->text('card-hotline')->nullable();
            $table->text('card-whatsapp')->nullable();
            $table->text('card-sales-contact')->nullable();


            //contact form
            $table->text('form-title')->nullable();
            $table->text('form-name-title')->nullable();
            $table->text('form-name-place-holder')->nullable();
            $table->text('form-email-title')->nullable();
            $table->text('form-email-place-holder')->nullable();
            $table->text('form-message-title')->nullable();
            $table->text('form-message-place-holder')->nullable();
            $table->text('form-note')->nullable();
            $table->text('form-button-text')->nullable();

            //social media
            $table->text('social-quote')->nullable();

            $table->timestamps();
        });

        DB::table('contact_us_pages')->insert(['id'  => 1]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_us_pages');
    }
};
