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
        Schema::table('companies', function (Blueprint $table) {
            $table->integer("hotline")->nullable();
        });

        Schema::table('home_pages', function (Blueprint $table) {
            $table->dropColumn("hotline");
        });

        Schema::table('contact_us_pages', function (Blueprint $table) {
            $table->dropColumn("card-hotline");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
        Schema::table('companies', function (Blueprint $table) {
            $table->dropColumn("hotline");
        });

        Schema::table('home_pages', function (Blueprint $table) {
            $table->integer("hotline")->nullable();
        });

        Schema::table('contact_us_pages', function (Blueprint $table) {
            $table->integer("card-hotline")->nullable();
        });
    }
};
