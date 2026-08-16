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
        Schema::table('about_us_pages', function (Blueprint $table) {
            $table->text('video_poster');
        });

        Schema::table('reviews_pages', function (Blueprint $table) {
            $table->text('video_poster');
            
        });

        Schema::table('media_pages', function (Blueprint $table) {
            $table->text('video_poster');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('about_us_pages', function (Blueprint $table) {
            $table->dropColumn('video_poster');
        });

        Schema::table('reviews_pages', function (Blueprint $table) {
            $table->dropColumn('video_poster');
            
        });

        Schema::table('media_pages', function (Blueprint $table) {
            $table->dropColumn('video_poster');
        });
    }
};
