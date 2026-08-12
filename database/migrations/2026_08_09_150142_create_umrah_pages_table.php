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
        Schema::create('umrah_packages_pages', function (Blueprint $table) {
            $table->id();

            //Hero Section
            $table->text("hero-title")->nullable();
            $table->text("hero-sub-title")->nullable();
            $table->text("hero-image")->nullable();
            $table->text("note")->nullable();

            $table->timestamps();
        });

        DB::table('umrah_packages_pages')->insert(['id'  => 1]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umrah_packages_pages');
    }
};
