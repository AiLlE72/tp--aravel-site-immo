<?php

use App\Models\Heating;
use App\Models\Images;
use App\Models\Properties;
use App\Models\Specificities;
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
        Schema::create('property_specificity', function(Blueprint $table){
            $table->foreignIdFor(Properties::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Specificities::class)->constrained()->cascadeOnDelete();
            $table->primary(['properties_id', 'specificities_id']);
        });

        Schema::create('property_heating', function(Blueprint $table){
            $table->foreignIdFor(Properties::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Heating::class)->constrained()->cascadeOnDelete();
            $table->primary(['properties_id', 'heating_id']);
        });

        Schema::create('property_images', function(Blueprint $table){
            $table->foreignIdFor(Properties::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Images::class)->constrained()->cascadeOnDelete();
            $table->primary(['properties_id', 'images_id']);
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_specificities');
        Schema::dropIfExists('property_heating');
        Schema::dropIfExists('property_images');
    }
};
