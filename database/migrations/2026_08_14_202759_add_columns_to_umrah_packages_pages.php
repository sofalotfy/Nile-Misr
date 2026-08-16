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
        Schema::table('umrah_packages_pages', function (Blueprint $table) {
            $table->text("six-days-note")->nullable();
            $table->text("eight-days-note")->nullable();
            $table->text("ten-days-note")->nullable();
            $table->text("fifteen-days-note")->nullable();
            $table->text("footer-six-days-note")->nullable();
            $table->text("footer-eight-days-note")->nullable();
            $table->text("footer-ten-days-note")->nullable();
            $table->text("footer-fifteen-days-note")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('umrah_packages_pages', function (Blueprint $table) {
            $table->dropColumn("six-days-note");
            $table->dropColumn("eight-days-note");
            $table->dropColumn("ten-days-note");
            $table->dropColumn("fifteen-days-note");
            $table->dropColumn("footer-six-days-note");
            $table->dropColumn("footer-eight-days-note");
            $table->dropColumn("footer-ten-days-note");
            $table->dropColumn("footer-fifteen-days-note");
        });
    }
};
