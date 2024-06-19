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
        Schema::table('properties', function (Blueprint $table) {
            DB::statement('UPDATE properties SET price = REPLACE(price, ",", "")');
            DB::statement('UPDATE properties SET price = CAST(price AS DECIMAL(10, 2))');

            // Alter the column type to DECIMAL(10, 2)
            $table->decimal('price', 10, 2)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('properties', function (Blueprint $table) {
            $table->string('price')->change();
        });
    }
};
