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
            $table->sring("hero-tag");
            $table->text("hero-text");
            $table->text("hero-image");


            //Accreditations and Creams
            $table->string("accreditations-tittle");
            $table->text("accreditations-text");

            // Our Sales
            $table->text("sales-text");
            $table->json("image")->nullable; // Images

            // Strategic Partnerships
            $table->string("strategic-partnerships-tittle");
            $table->text("strategic-partnerships-text");
            $table->json("image")->nullable; // Images for Strategic Partnerships

            // Our Partnerships
            $table->string("partnerships-tittle");
            $table->text("partnerships-text");
            $table->text("achievement-text");

            //Royal Inn
            $table->text("royal-inn-image");
            $table->text("royal-inn-fullimage");
            $table->text("royal-inn-titlle");
            $table->text("royal-inn-tag");
            $table->text("royal-inn-text");

            //Noon
            $table->text("noon-image");
            $table->text("noon-titlle");
            $table->text("noon-tag");
            $table->text("noon-text");
            $table->text("noon-fullimage");


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
