<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Step 1: Clean the `aera` data (if necessary)
        DB::statement('UPDATE properties SET aera = REPLACE(aera, ",", "")');

        // Step 2: Cast the `aera` column to DECIMAL
        Schema::table('properties', function (Blueprint $table) {
            $table->decimal('aera', 10, 2)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Change the `aera` column back to string
        Schema::table('properties', function (Blueprint $table) {
            $table->string('aera')->change();
        });
    }
};
