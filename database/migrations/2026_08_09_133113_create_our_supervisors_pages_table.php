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
            $table->text("hero-title")->nullable();
            $table->text("hero-sub-title")->nullable();
            $table->text("hero-image")->nullable();

            // Our Supervisors
            $table->text("our-supervisors-tag")->nullable();
            $table->text("our-supervisors-quote")->nullable();
            $table->text("our-supervisors-text")->nullable();
            $table->text("our-supervisors-include-text")->nullable();

            //Organizational Supervision
            $table->text("organizational-supervisors-image")->nullable();
            $table->text("organizational-supervisors-title")->nullable();
            $table->text("organizational-supervisors-text")->nullable();

            // Service Supervision
            $table->text("service-supervisors-image")->nullable();
            $table->text("service-supervisors-title")->nullable();
            $table->text("service-supervisors-text")->nullable();

            //Religious Supervision            
            $table->text("religious-supervisors-image")->nullable();
            $table->text("religious-supervisors-title")->nullable();
            $table->text("religious-supervisors-text")->nullable();

            //Emergency and Safety Management
            $table->text("safety-management-image")->nullable();
            $table->text("safety-management-title")->nullable();
            $table->text("safety-management-text")->nullable();

            $table->timestamps();
        });

        DB::table('our_supervisors_pages')->insert(['id'  => 1]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('our_supervisors_pages');
    }
};
