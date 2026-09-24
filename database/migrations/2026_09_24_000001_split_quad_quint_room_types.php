<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        foreach (['umrah_prices', 'hajj_prices'] as $table) {
            DB::table($table)
                ->where('type', 'رباعي أو خماسي')
                ->update(['type' => 'رباعي']);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        foreach (['umrah_prices', 'hajj_prices'] as $table) {
            DB::table($table)
                ->where('type', 'رباعي')
                ->update(['type' => 'رباعي أو خماسي']);
        }
    }
};