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
            // Contact Information
            $table->string('hotline')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('email')->nullable();

            // Contact Form
            $table->string('contact_name')->nullable();
            $table->string('contact_email')->nullable();
            $table->text('contact_message')->nullable();

            // Booking Request
            $table->enum('service_type', ['hajj', 'umrah'])->nullable();
            $table->string('full_name')->nullable();
            $table->string('booking_whatsapp')->nullable();
            $table->unsignedInteger('travelers_count')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_us_pages');
    }
};
