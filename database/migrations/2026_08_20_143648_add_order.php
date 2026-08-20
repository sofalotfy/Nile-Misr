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
        Schema::table('umrahs_packages', function (Blueprint $table) {
            $table->integer('order')->default(1);
        });
        
        Schema::table('hajj_packages', function (Blueprint $table) {
            $table->integer('order')->default(1);
        });

        Schema::table('reviews', function (Blueprint $table) {
            $table->integer('order')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('umrahs_packages', function (Blueprint $table) {
            $table->dropColumn('order');
        });
        
        Schema::table('hajj_packages', function (Blueprint $table) {
            $table->dropColumn('order');
        });

        Schema::table('reviews', function (Blueprint $table) {
            $table->dropColumn('order');
        });
    }
};
