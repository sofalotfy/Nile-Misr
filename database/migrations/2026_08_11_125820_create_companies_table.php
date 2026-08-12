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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();

            // pilgrimCount
            $table->string("pilgrim-count")->nullable();            
            $table->float("rating")->nullable();            
            $table->string("review-count")->nullable();

            //Sites
            $table->json('sites')->nullable();  //image,name,address,location,number

            //social media
            $table->text('tiktok')->nullable();
            $table->text('twitter')->nullable();
            $table->text('instgram')->nullable();
            $table->text('facebook')->nullable();

            $table->json('phones')->nullable();  //array of strings
            $table->json('emails')->nullable();  //array of strings

            $table->timestamps();
        });

        DB::table('companies')->insert(['id'  => 1]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
