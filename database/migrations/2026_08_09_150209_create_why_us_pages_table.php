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
        Schema::create('why_us_pages', function (Blueprint $table) {
            $table->id();

            //Hero Section
            $table->text("hero-title")->nullable();
            $table->text("hero-sub-title")->nullable();
            $table->text("hero-image")->nullable();


            //Accreditations and notations
            $table->text("accreditations-title")->nullable();
            $table->text("accreditations-text")->nullable();
            $table->text("accreditations-note")->nullable();
            $table->json("images")->nullable(); // array of strings

            // Strategic Partnerships
            $table->string("strategic-partnerships-title")->nullable();
            $table->text("strategic-partnerships-text")->nullable();
            $table->json("images")->nullable(); // array of stringss

            // Our Partnerships
            $table->text("partnerships-title")->nullable();
            $table->text("partnerships-text")->nullable();
            $table->text("partnerships-note")->nullable();

            //Royal Inn
            $table->text("royal-inn-logo")->nullable();
            $table->text("royal-inn-image")->nullable();
            $table->text("royal-inn-titlle")->nullable();
            $table->text("royal-inn-tag")->nullable();
            $table->text("royal-inn-text")->nullable();

            //Noon
            $table->text("noon-logo")->nullable();
            $table->text("noon-titlle")->nullable();
            $table->text("noon-tag")->nullable();
            $table->text("noon-text")->nullable();
            $table->text("noon-image")->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('why_us_pages');
    }
};
