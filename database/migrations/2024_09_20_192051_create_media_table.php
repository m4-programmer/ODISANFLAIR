<?php

use App\Models\Media;
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
        Schema::create('media', function (Blueprint $table) {
            $table->id();
            $table->enum("type", [Media::VIDEO, Media::AUDIO]);
            $table->string("title");
            $table->string("category")->nullable();
            $table->unique(['title','type']);
            $table->string("slug");
            $table->string("cover")->nullable();
            $table->string("url")->comment("path to media file");
            $table->string("fileType")->nullable();
            $table->string("views")->nullable()->comment("times played");
            $table->boolean("status");
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media');
    }
};
