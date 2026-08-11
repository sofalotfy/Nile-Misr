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
        Schema::create('umrah_prices', function (Blueprint $table) {
            $table->id();

            $table->foreignId('umrah_package_id')
                ->constrained('umrahs_packages')
                ->cascadeOnDelete();

            $table->string('type');  //enum
            $table->integer('price');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('umrah_prices');
    }
};
