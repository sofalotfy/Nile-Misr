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
        Schema::create('our_services_pages', function (Blueprint $table) {
            $table->id();
            //Hero Section
            $table->string("our-services-tittle")->nullable();
            $table->text("our-services-text")->nullable();

            //Hajj Service
            $table->text("hajj-service-right-image")->nullable();
            $table->text("hajj-service-center-image")->nullable();
            $table->text("hajj-service-left-image")->nullable();
            $table->text("hajj-service-tag")->nullable();
            $table->text("hajj-service-tittle")->nullable();
            $table->text("hajj-service-text")->nullable();
            $table->text("with-you-tittle")->nullable();
            $table->text("with-you-text")->nullable();

            //Umrah Service
            $table->text("umrah-service-right-image")->nullable();
            $table->text("umrah-service-left-image")->nullable();
            $table->text("umrah-service-tag")->nullable();
            $table->text("umrah-service-tittle")->nullable();
            $table->text("umrah-service-text")->nullable();
            $table->text("care-about-you-tittle")->nullable();
            $table->text("care-about-you-text")->nullable();

            // Residents abroad
            $table->text("residents-abroad-image")->nullable();
            $table->text("residents-abroad-tag")->nullable();
            $table->text("residents-abroad-tittle")->nullable();
            $table->text("residents-abroad-text")->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('our_services_pages');
    }
};
