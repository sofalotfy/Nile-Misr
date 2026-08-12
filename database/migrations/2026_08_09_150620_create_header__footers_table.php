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
        Schema::create('header__footers', function (Blueprint $table) {
            $table->id();

            $table->text('header-logo')->nullable();
            $table->text('footer-logo')->nullable();


            $table->timestamps();
        });

        DB::table('header__footers')->insert(['id'  => 1]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('header__footers');
    }
};
