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
        Schema::table('hajj_packages', function (Blueprint $table) {
            $table->dropColumn('maka-hotel');
            $table->dropColumn('madina-hotel');

            $table->foreignId('maka_hotel_id')
                ->constrained('hotels')
                ->cascadeOnDelete();

            $table->foreignId('madina_hotel_id')
                ->constrained('hotels')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('umrahs_packages', function (Blueprint $table) {
            $table->dropForeign(['maka_hotel_id']);
            $table->dropForeign(['madina_hotel_id']);

            $table->dropColumn([
                'maka_hotel_id',
                'madina_hotel_id',
            ]);

            $table->string('maka-hotel')->nullable();
            $table->string('madina-hotel')->nullable();
        });
    }
};
