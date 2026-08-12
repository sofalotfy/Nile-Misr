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
        Schema::create('hajj_packages_pages', function (Blueprint $table) {
            $table->id();

            $table->text("hero-title")->nullable();
            $table->text("hero-sub-title")->nullable();
            $table->text("hero-image")->nullable();
            $table->text("description")->nullable();

            $table->timestamps();
        });
        
        DB::table('hajj_packages_pages')->insert(['id'  => 1]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hajj_packages_pages');
    }
};
