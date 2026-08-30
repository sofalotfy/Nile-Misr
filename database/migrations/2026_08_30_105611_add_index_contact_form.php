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
        Schema::table('home_pages', function (Blueprint $table) {
            $table->text('contact_form_image')->nullable();
            $table->string('contact_form_name_placeholder')->nullable();
            $table->string('contact_form_phone_placeholder')->nullable();
            $table->string('contact_form_email_placeholder')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('home_pages', function (Blueprint $table) {
            $table->dropColumn([
                'contact_form_image',
                'contact_form_name_placeholder',
                'contact_form_phone_placeholder',
                'contact_form_email_placeholder'
            ]);
        });
    }
};
