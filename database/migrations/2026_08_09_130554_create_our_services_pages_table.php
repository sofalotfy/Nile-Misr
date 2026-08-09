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
            $table->string("our-services-tittle");
            $table->text("our-services-text");

            //Hajj Service
            $table->text("hajj-service-right-image");
            $table->text("hajj-service-center-image");
            $table->text("hajj-service-left-image");
            $table->string("hajj-service-tag");
            $table->text("hajj-service-tittle");
            $table->text("hajj-service-text");
            $table->text("with-you-tittle");
            $table->text("with-you-text");

            //Umrah Service
            $table->text("umrah-service-right-image");
            $table->text("umrah-service-left-image");
            $table->string("umrah-service-tag");
            $table->text("umrah-service-tittle");
            $table->text("umrah-service-text");
            $table->text("care-about-you-tittle");
            $table->text("care-about-you-text");

            // Residents abroad
            $table->text("residents-abroad-image");
            $table->string("residents-abroad-tag");
            $table->text("residents-abroad-tittle");
            $table->text("residents-abroad-text");


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
