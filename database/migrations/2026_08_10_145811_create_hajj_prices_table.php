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
        Schema::create('hajj_prices', function (Blueprint $table) {
            $table->id();

            $table->foreignId('hajj_package_id')
                ->constrained('hajj_packages')
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
        Schema::dropIfExists('hajj_prices');
    }
};
