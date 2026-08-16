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
        Schema::table('hotels', function (Blueprint $table) {
            $table->dropColumn('duration');
        });

        Schema::table('hajj_packages', function (Blueprint $table) {
            $table->integer("maka-duration")->nullable();
            $table->integer("madina-duration")->nullable();
            
        });

        Schema::table('umrahs_packages', function (Blueprint $table) {
            $table->integer("maka-duration")->nullable();
            $table->integer("madina-duration")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hotels', function (Blueprint $table) {
            $table->integer("duration")->nullable();
        });

        Schema::table('hajj_packages', function (Blueprint $table) {
            $table->dropColumn("maka-duration");
            $table->dropColumn("madina-duration");
        });

        Schema::table('umrahs_packages', function (Blueprint $table) {
            $table->dropColumn("maka-duration");
            $table->dropColumn("madina-duration");
        });
    }
};
