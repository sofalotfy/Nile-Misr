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
        Schema::table('feed_backs', function (Blueprint $table) {
            $table->enum('type', ['حج', 'عمرة'])->nullable();
            $table->string('phone')->nullable();
            $table->text('message')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('feed_backs', function (Blueprint $table) {
            $table->dropColumn(['type', 'phone']);
            $table->text('message')->nullable(false)->change();
        });
    }
};
