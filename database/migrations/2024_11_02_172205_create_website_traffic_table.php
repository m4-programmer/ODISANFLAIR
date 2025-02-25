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
        Schema::create('website_traffic', function (Blueprint $table) {
            $table->id();
            $table->ipAddress();
            $table->string('device_type');
            $table->json('meta_data');//holds all the pages visited and number of times
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('website_traffic');
    }
};
