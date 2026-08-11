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
        Schema::create('our_supervisors_pages', function (Blueprint $table) {
            $table->id();
            //Hero Section
            $table->string("hero-tag");
            $table->text("hero-text");
            $table->text("hero-image");

            // Our Supervisors
            $table->string("our-supervisors-tag");
            $table->text("our-supervisors-tittle");
            $table->text("our-supervisors-text");
            $table->text("our-supervisors-include-text");
            $table->text("our-supervisors-image");

            //Organizational Supervision
            $table->text("organizational-supervisors-image");
            $table->text("organizational-supervisors-tittle");
            $table->text("organizational-supervisors-text");

            // Service Supervision
            $table->text("service-supervisors-image");
            $table->text("service-supervisors-tittle");
            $table->text("service-supervisors-text");

            //Religious Supervision            
            $table->text("religious-supervisors-image");
            $table->text("religious-supervisors-tittle");
            $table->text("religious-supervisors-text");

            //Emergency and Safety Management
            $table->text("safety-management-image");
            $table->text("safety-management-tittle");
            $table->text("safety-management-text");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('our_supervisors_pages');
    }
};
