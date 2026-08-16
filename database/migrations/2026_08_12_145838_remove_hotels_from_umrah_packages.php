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
            $table->dropColumn('maka-hotel');
            $table->dropColumn('maka-address');
            $table->dropColumn('maka-rating');
            $table->dropColumn('maka-rating_count');
            $table->dropColumn('maka-distance');
            $table->dropColumn('maka-duration');
            $table->dropColumn('maka-includes-iftar');
            $table->dropColumn('maka-images');
            $table->dropColumn('maka-location');
            $table->dropColumn('madina-hotel');
            $table->dropColumn('madina-address');
            $table->dropColumn('madina-rating');
            $table->dropColumn('madina-rating_count');
            $table->dropColumn('madina-distance');
            $table->dropColumn('madina-duration');
            $table->dropColumn('madina-includes-iftar');
            $table->dropColumn('madina-images');
            $table->dropColumn('madina-location');

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
            $table->string('maka-address')->nullable();
            $table->decimal('maka-rating', 3, 2)->nullable();
            $table->integer('maka-rating_count')->nullable();
            $table->string('maka-distance')->nullable();
            $table->string('maka-duration')->nullable();
            $table->boolean('maka-includes-iftar')->nullable();
            $table->json('maka-images')->nullable();
            $table->string('maka-location')->nullable();

            $table->string('madina-hotel')->nullable();
            $table->string('madina-address')->nullable();
            $table->decimal('madina-rating', 3, 2)->nullable();
            $table->integer('madina-rating_count')->nullable();
            $table->string('madina-distance')->nullable();
            $table->string('madina-duration')->nullable();
            $table->boolean('madina-includes-iftar')->nullable();
            $table->json('madina-images')->nullable();
            $table->string('madina-location')->nullable();
        });
    }
};
